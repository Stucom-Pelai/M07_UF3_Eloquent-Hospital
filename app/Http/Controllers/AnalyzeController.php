<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnalyzeController extends Controller
{
    public function analyzeSymptoms(Request $request)
    {
        $this->initApi();

        $symptoms = $request->input('symptoms');

        foreach($symptoms as $symptom){
            $this->addSymptoms($symptom);
        }
        
    }

    public function addSymptoms($symptom){

    }

    public function initApi(){

        $response = Http::post('https://api.endlessmedical.com/v1/dx/InitSession');
        $sessionId = '';
        $responseInitApi = []; 

        if ($response->successful()) {
            $responseData = $response->json();
            if(isset($responseData['SessionID'])) {
                $sessionId = $responseData['SessionID'];
                $responseInitApi['SessionID'] = $sessionId;
            }
        } else {
            $responseInitApi['SessionID'] = 'Hubo un error al realizar la solicitud a la API';
        }

        $responseTerms = Http::get('https://api.endlessmedical.com/v1/dx/AcceptTermsOfUse', [
            'SessionID' => $sessionId,
            'passphrase' => urlencode("I have read, understood and I accept and agree to comply with the Terms of Use of EndlessMedicalAPI and Endless Medical services. The Terms of Use are available on endlessmedical.com")
        ]);

        if ($responseTerms->successful()) {
            $responseDataTerms = $responseTerms->json();
            if (isset($responseDataTerms['status']) && $responseDataTerms['status'] === 'ok') {
                $responseInitApi['Terms'] = $responseDataTerms['status'];
            } else {
                $responseInitApi['Terms'] = 'Error al aceptar los términos de uso';
            }
        } else {
            $responseInitApi['Terms'] = 'Hubo un error al realizar la solicitud a la API';
        }

        $responseInitApi = response()->json($responseInitApi);

    }

}
