<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;

class AnalyzeController extends Controller
{
    /**
     * Analyzes symptoms provided by the user and retrieves potential diseases based on those symptoms.
     * Initializes a session with the API, updates features based on user input, and fetches the analysis results.
     */
    public function analyzeSymptoms(Request $request)
    {
        $sessionId = '';

        $responseInit = $this->initApi($sessionId);

        $id = $responseInit->getData(true)['SessionID'];

        $symptoms = $request->input('symptoms');

        foreach ($symptoms as $symptom) {
            $this->addSymptoms($symptom, $id);
        }

        $response = Http::get('https://api.endlessmedical.com/v1/dx/Analyze', [
            'SessionID' => $id,
            'NumberOfResults' => 10
        ]);
        $data = $response->json();

        try {
            return response()->json(['analyze' => $data["Diseases"]]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    /**
     * Updates the session with symptoms provided by the user.
     * Each symptom is sent to the API to update the session's features.
     */
    public function addSymptoms($symptoms, $id)
    {
        foreach ($symptoms as $key => $symptom) {

            $url = 'https://api.endlessmedical.com/v1/dx/UpdateFeature?SessionID=' . urlencode($id) . '&name=' . urlencode($key) . '&value=' . urlencode($symptom);
            $response = Http::post($url);

            if (!$response->successful()) {
                return response()->json(['error' => 'Failed to add symptom'], 500);
            }
        }
    }

    /**
     * Initializes a session with the medical API and accepts the terms of use.
     * Returns a new session ID and the status of accepting the terms of use.
     */
    public function initApi($sessionId)
    {

        $response = Http::get('https://api.endlessmedical.com/v1/dx/InitSession');

        $responseInitApi = [];

        if ($response->successful()) {
            $responseData = $response->json();
            if (isset($responseData['SessionID'])) {
                $sessionId = $responseData['SessionID'];
                $responseInitApi['SessionID'] = $sessionId;
            }
        } else {
            $responseInitApi['SessionID'] = 'Failed to init session';
        }

        try {

            $url = 'https://api.endlessmedical.com/v1/dx/AcceptTermsOfUse?SessionID=' . urlencode($sessionId) . '&passphrase=' . urlencode("I have read, understood and I accept and agree to comply with the Terms of Use of EndlessMedicalAPI and Endless Medical services. The Terms of Use are available on endlessmedical.com");
            $responseTerms = Http::post($url);

            if ($responseTerms->successful()) {
                $responseDataTerms = $responseTerms->json();
                if (isset($responseDataTerms['status']) && $responseDataTerms['status'] === 'ok') {
                    $responseInitApi['Terms'] = $responseDataTerms['status'];
                } else {
                    $responseInitApi['Terms'] = 'Error while accepting terms of use';
                }
            } else {
                $responseInitApi['Terms'] = 'Failed to request to API';
            }
        } catch (RequestException  $e) {
            $errorMessage = $e->getMessage();
        }

        return response()->json([
            'SessionID' => $responseInitApi["SessionID"], 
            'Terms' => $responseInitApi["Terms"]
        ]);
    }
}
