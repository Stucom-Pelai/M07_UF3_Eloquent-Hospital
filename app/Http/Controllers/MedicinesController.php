<?php

namespace App\Http\Controllers;

use App\Models\medicine;

class MedicinesController
{

    public function getAllMedicines()
    {
        $medicine = medicine::all()->toArray();
        try{
            return response()->json(['medicine' => $medicine]);
        }catch(\Exception $e){
            return response()->json(['action' => 'get', 'status' => false, 'error' => $e->getMessage()]);
        }
    }
}
