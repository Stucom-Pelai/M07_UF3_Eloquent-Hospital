<?php

namespace App\Http\Livewire\Patients;

use App\Models\settings as SettingModel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class SymptomCheck extends Component
{

    public function render()
    {
        return view('livewire.patients.symptom_check')->layout('patient.layouts.app');
        
    }
}
