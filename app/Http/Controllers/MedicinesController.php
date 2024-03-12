<?php

namespace App\Http\Controllers;

use App\Models\medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class MedicinesController extends Controller
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
    public function addMedicine(Request $request)
    {
        try {
            $request->validate([
                'price' => 'required|numeric|min:0',
                'quantity' => 'required|integer|min:0',
                'code' => 'required|numeric',
            ]);

            $medicineExistInDB = DB::table('medicines')->where('code', $request->code)->exists();

            if ($medicineExistInDB) {
                return response()->json(['error' => 'Lo siento, pero este medicamento ya existe en la tabla "medicines" de la base de datos "hms"'], 400);
            }

            $medicine = new Medicine([
                'price' => $request->price,
                'quantity' => $request->quantity,
                'code' => $request->code,
            ]);

            $medicine->save();

            return response()->json(['message' => 'Medicamento agregado correctamente', 'medicine' => $medicine], 201);
        } catch (\Exception $e) {
            return response()->json(['action' => 'add', 'status' => false, 'error' => $e->getMessage()]);
        }
    }
}
