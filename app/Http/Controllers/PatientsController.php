<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\patient;
class PatientsController {

public function getAllPatients(){
    $patients = patient::all()->toArray();
    try{
        return response()->json(['patients' => $patients]);
    }catch(\Exception $e){
        return response()->json(['action' => 'get', 'status' => false, 'error' => $e->getMessage()]);
    }

}

}