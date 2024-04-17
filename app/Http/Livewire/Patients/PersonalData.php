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

class PersonalData extends Component
{
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public $name;
    public $email;
    public $phone;
    public $gender;
    public $age;
    public $address;
    public $photo;
    public $button_text = "Add New Patient";

    public function update($id){
        $this->validate([
            'name' => 'required||min:6|max:50',
            'gender' => 'required',
            'age' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required',
            'age' => 'required',
        ]);

        $patient = patient::findOrFail($id);
        $patient->name = $this->name;
        $patient->email = $this->email;
        $patient->address = $this->address;
        $patient->age = $this->age;
        $patient->gender = $this->gender;
        $patient->bloodgroup = $this->bloodgroup;
        $patient->phone = $this->phone;

        if ($this->photo) {
            $this->validate([
                'photo' => 'required|image|max:3072',
            ]);
            Storage::disk('public')->delete($patient->photo_path);
            $patient->photo_path = $this->storeImage();

        }

        $patient->save();

        $this->name="";
        $this->email="";
        $this->address="";
        $this->phone="";
        $this->gender="";
        $this->address="";
        $this->age="";
        $this->photo="";

        session()->flash('message', 'Patient Updated Successfully.');

        $this->button_text = "Add New Patient";


    }

    public function render()
    {
        $patient = (patient::find(1));
        return view('livewire.patients.personal_data',['patient' => $patient])->layout('patient.layouts.app');
        
    }
}
