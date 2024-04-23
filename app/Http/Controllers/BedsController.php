<?php

namespace App\Http\Controllers;

use App\Models\beds;
use Illuminate\Http\Request;

class BedsController extends Controller
{
    public function getBedsByStatus($value){
        
        if ($value !== 'alloted' && $value !== 'vacant') {
            return response()->json(['error' => 'Invalid status value'], 400);
        }

        $beds = beds::where('status', $value)->get()->toArray();

        try{
            return response()->json(['beds' => $beds]);
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    
    }
}
