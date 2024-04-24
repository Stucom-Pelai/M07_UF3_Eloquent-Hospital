<?php

namespace App\Http\Livewire\Patients;

use App\Models\Patient;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\appointment;

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
    public $button_update = "Save";

    public $patient;

    public function mount()
    {
        $this->patient = Patient::find(1);
        $this->name = $this->patient->name;
        $this->email = $this->patient->email;
        $this->address = $this->patient->address;
        $this->age = $this->patient->age;
        $this->gender = $this->patient->gender;
        $this->phone = $this->patient->phone;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:6|max:50',
            'gender' => 'required',
            'age' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required|numeric',
        ]);

        $patient = Patient::findOrFail($this->patient->id);
        $patient->name = $this->name;
        $patient->email = $this->email;
        $patient->address = $this->address;
        $patient->age = $this->age;
        $patient->gender = $this->gender;
        $patient->phone = $this->phone;

        if ($this->photo) {
            $this->validate([
                'photo' => 'required|image|max:3072',
            ]);
            Storage::disk('public')->delete($patient->photo_path);
            $patient->photo_path = $this->storeImage();
        }

        $patient->save();

        session()->flash('message', 'Patient Updated Successfully.');

        $this->patient = Patient::find(1);
        $this->button_update = "Save";
    }

    private function storeImage()
    {
        $img = ImageManagerStatic::make($this->photo)->encode('jpg');
        $name = Str::random() . '.jpg';
        Storage::disk('public')->put($name, $img);

        return $name;
    }

  

    public function render()
    { 
        $patient = (patient::find(1));
        $appointment = appointment::where('patient_id', $patient->id)
        ->first();
        if (!$appointment) {
            $message = "You don't have any pending appointments.";
            return view('livewire.patients.personal_data', ['patient' => $patient, 'message' => $message])->layout('patient.layouts.app');
        }
        return view('livewire.patients.personal_data', ['patient' => $patient, 'appointment' => $appointment])->layout('patient.layouts.app');
    }
}
