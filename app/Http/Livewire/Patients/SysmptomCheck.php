<?php

namespace App\Http\Livewire\Patients;

use App\Models\settings as SettingModel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class SysmptomCheck extends Component
{

    public function render()
    {
        return view('livewire.patients.sysmptom_check')->layout('patient.layouts.app');
        
    }
}
