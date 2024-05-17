<?php

namespace App\Http\Livewire\Patients;
use App\Models\patient;
use App\Models\appointment;
use App\Models\settings as SettingModel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Home extends Component
{

    public function render()
    {
        // dd($user = Auth::id());
        $patient = (patient::find(Auth::id()));
        $appointment = appointment::where('patient_id', $patient->id)
        ->where('status', 'pending')
        ->first();
        if (!$appointment) {
            $message = "You don't have any pending appointments.";
            return view('livewire.patients.patients', ['patient' => $patient, 'message' => $message])->layout('patient.layouts.app');
        }
        return view('livewire.patients.patients', ['patient' => $patient, 'appointment' => $appointment])->layout('patient.layouts.app');

        
    }
}
