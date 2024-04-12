<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnalyzeController extends Controller
{
    public function analyzeSymptoms(Request $request)
    {

        $sessionId = '';
        //url example: https://api.endlessmedical.com/v1/dx/Analyze?SessionID=GeLIy3MDIeoIPNZQ&NumberOfResults=5
        // response: 
        // {
        //     "status": "ok",
        //     "Diseases": [
        //         {
        //         "Otitis media": "1.0007887223203893"
        //         },
        //         {
        //         "Asthma exacerbation without acute respiratory failure": "1.0001724999988861"
        //         },
        //         {
        //         "Acute bronchitis": "0.9999628037654515"
        //         },
        //         {
        //         "Chronic obstructive pulmonary disease (COPD)": "0.9986944761108576"
        //         },
        //         {
        //         "Viral pharyngitis (etiology usually rhinovirus, coronavirus, adenovirus, parainfluenza)": "0.9940290911941558"
        //         }
        //     ],
        //     "VariableImportances": [
        //         {
        //         "Otitis media": [
        //             [
        //             "EarPainRos",
        //             "1.0"
        //             ],
        //             [
        //             "Temp",
        //             "0.03496318412371139"
        //             ],
        //             [
        //             "OtoscopicErythema",
        //             "0.012202859801766438"
        //             ],
        //             [
        //             "HearingLossRos",
        //             "0.012171508524770287"
        //             ],
        //             [
        //             "SeverityCough",
        //             "0.006954659763718865"
        //             ]
        //         ]
        //         },
        //         {
        //         "Asthma exacerbation without acute respiratory failure": [
        //             [
        //             "FEV1toFVCRatio",
        //             "1.0"
        //             ],
        //             [
        //             "pCO2onABG",
        //             "0.2828223011017039"
        //             ],
        //             [
        //             "O2Sats",
        //             "0.2711368130942004"
        //             ],
        //             [
        //             "DyspneaProgressionSubjective",
        //             "0.0884402923085123"
        //             ],
        //             [
        //             "DyspneaSeveritySubjective",
        //             "0.06588620532380231"
        //             ]
        //         ]
        //         },
        //         {
        //         "Acute bronchitis": [
        //             [
        //             "SeverityCough",
        //             "1.0"
        //             ],
        //             [
        //             "Wheezing",
        //             "0.2713446236073552"
        //             ],
        //             [
        //             "Age",
        //             "0.008639811907095153"
        //             ],
        //             [
        //             "Temp",
        //             "0.0037054023103729014"
        //             ],
        //             [
        //             "O2Sats",
        //             "0.0027111627655544437"
        //             ]
        //         ]
        //         },
        //         {
        //         "Chronic obstructive pulmonary disease (COPD)": [
        //             [
        //             "FEV1toFVCRatio",
        //             "1.0"
        //             ],
        //             [
        //             "DyspneaProgressionSubjective",
        //             "0.7819580513208088"
        //             ],
        //             [
        //             "PMHXCOPD",
        //             "0.4094562233662651"
        //             ],
        //             [
        //             "DyspneaSeveritySubjective",
        //             "0.08714633263942984"
        //             ],
        //             [
        //             "RR",
        //             "0.015447668459893942"
        //             ]
        //         ]
        //         },
        //         {
        //         "Viral pharyngitis (etiology usually rhinovirus, coronavirus, adenovirus, parainfluenza)": [
        //             [
        //             "PCRHIVDNA",
        //             "1.0"
        //             ],
        //             [
        //             "PCRFlu",
        //             "0.4839982969936215"
        //             ],
        //             [
        //             "RapiStrepTest",
        //             "0.3096239797372729"
        //             ],
        //             [
        //             "PCRCovid",
        //             "0.25163269735908705"
        //             ],
        //             [
        //             "HIVWesternBlot",
        //             "0.17790715897802004"
        //             ]
        //         ]
        //         }
        //     ]
        // }

        $this->initApi($sessionId);

        $symptoms = $request->input('symptoms');

        foreach($symptoms as $symptom){
            $this->addSymptoms($symptom, $sessionId);
        }
        
        //analyze when symptoms have been updated
        //https://api.endlessmedical.com/v1/dx/Analyze?SessionID=$sessionKey&NumberOfResults=5
    }

    public function addSymptoms($symptom, $sessionId){
        //TODO
        //do the two calls to update feature like this: https://api.endlessmedical.com/v1/dx/UpdateFeature?SessionID=$seassionKey&name=$symptom&value=$symptomValue
        //then analyze 

        //url: https://api.endlessmedical.com/v1/dx/UpdateFeature?SessionID=GeLIy3MDIeoIPNZQ&name=Age&value=31
        //url: https://api.endlessmedical.com/v1/dx/UpdateFeature?SessionID=GeLIy3MDIeoIPNZQ&name=Temp&value=31

    }

    public function initApi($sessionId){

        $response = Http::post('https://api.endlessmedical.com/v1/dx/InitSession');
       
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
