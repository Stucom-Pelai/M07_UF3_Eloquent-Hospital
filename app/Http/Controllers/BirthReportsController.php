<?php

namespace App\Http\Controllers;
use App\Models\birthreport;
use Illuminate\Support\Facades\DB;


class BirthReportsController {

    public function getBirthStats(){
        
        // Count Total Birth Reports
        
        $totalBirthReports = Birthreport::count();

        // Count Number of Birth Reports by Gender using Eloquent's Collection methods
        
        $birthsByGender = Birthreport::all()->groupBy('gender')->map->count();

        // Calculate Average Number of Births by Month

        $monthlyAverages = $totalBirthReports/12;
       
        // Prepare your data as JSON
       
        $result = [
            'totalBirthReports' => $totalBirthReports,
            'birthsByGender' => $birthsByGender,
            'averageBirthsByMonth' => $monthlyAverages
        ];

        return response()->json($result);
    }
}