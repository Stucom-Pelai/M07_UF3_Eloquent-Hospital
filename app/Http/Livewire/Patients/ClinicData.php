<?php

namespace App\Http\Livewire\Patients;

use App\Models\patient;
use App\Models\settings as SettingModel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class ClinicData extends Component
{

    // public function render()
    // {
    //     return view('livewire.patients.clinic_data')->layout('patient.layouts.app');
    // }

    public function render()
    {
        // dd(patient::find(1));
        $patient = patient::find(1);
        return view('livewire.patients.clinic_data',[
            'patients' => $patient,
        ])->layout('patient.layouts.app');
    }
}
