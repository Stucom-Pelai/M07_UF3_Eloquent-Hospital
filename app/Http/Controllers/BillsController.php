<?php
namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BillsController extends Controller
{
    public function payBill($patient_id)
    {
        try {  
            $bill = Bill::where('patients_id', $patient_id)->firstOrFail();  
                    
            if ($bill->status === 'paid') {
                return response()->json(['message' => 'The bill is already paid.'], 200);
            }else {
            $bill->status = 'paid';
            $bill->save();

            return response()->json(['message' => 'Bill status updated to paid.'], 200);
        }
        } catch (ModelNotFoundException $e) {     

            return response()->json(['message' => 'Bill not found for the provided patient ID.'], 404);
        } catch (\Exception $e) {

            return response()->json(['message' => 'An error occurred while updating the bill status.'], 500);
        }
    }
}
