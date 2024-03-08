<?php
namespace App\Http\Controllers;
use App\Models\patient;
class PatientsController extends Controller {

    public function getAllPatients(){
        $patients = patient::all()->toArray();
        foreach ($patients as &$patient) {
            unset($patient['doctor']);
        }   
        try {
            return response()->json(['patients' => $patients]);
        } catch(\Exception $e) {
            return response()->json(['action' => 'get', 'status' => false, 'error' => $e->getMessage()]);
        }
    }
    

}