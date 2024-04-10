<?php

namespace App\Http\Livewire\Admins;

use App\Models\department;
use App\Models\doctor;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use Livewire\WithPagination;

use Livewire\WithFileUploads;

class Doctors extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public $name;
    public $email;
    public $password;
    public $address;
    public $phone;
    public $department = 'null';
    public $specialization;    
    public $photo;

    public $edit_photo;
    public $edit_doctor_id;
    public $button_text = "Add New doctor";



    public function add_doctor()
    {
        if ($this->edit_photo) {

            $this->update($this->edit_doctor_id);

        }else{
            $this->validate([
                'name' => 'required||min:6|max:50',
                'email' => 'required|email|unique:doctors,email,except,id',
                'password' => 'required|min:6',
                'address' => 'required',
                'phone' => 'required|unique:doctors,phone,except,id',
                'department' => 'required',
                'specialization' => 'required',
                'photo' => 'required|image|max:3072', //3MB
                ]);
            doctor::create([
                'name'        => $this->name,
                'email'        => $this->Email,
                'password'        => bcrypt($this->Password),
                'address' => $this->Address,
                'phone' => $this->Phone,
                'department' => $this->department,
                'specialization' => $this->Specialization,
                'photo_path'  => $this->storeImage(),
            ]);
            //unset variables
            $this->name="";
            $this->email="";
            $this->password="";
            $this->address="";
            $this->phone="";
            $this->department="";
            $this->specialization="";
            $this->photo="";
            session()->flash('message', 'Doctor Created successfully.');
        }

    }

    public function storeImage()
    {
        if (!$this->Photo) {
            return null;
        }
        $imag   = ImageManagerStatic::make($this->Photo)->encode('jpg');
        $name  = Str::random() . '.jpg';
        Storage::disk('public')->put($name, $imag);
        return env('APP_URL').'storage/'. $name;
    }

     public function edit($id)
    {
        $doctor = doctor::findOrFail($id);
        $this->edit_doctor_id = $id;

        $this->name = $doctor->name;
        $this->email = $doctor->email;
        $this->address = $doctor->address;
        $this->phone = $doctor->phone;
        $this->department = $doctor->department;
        $this->specialization = $doctor->specialization;
        $this->edit_photo = $doctor->photo_path;

        $this->button_text="Update Doctor";
    }
    public function update($id)
    {
        $this->validate([
                'name' => 'required||min:6|max:50',
                'email' => 'required|email',
                'password' => 'required|min:6',
                'address' => 'required',
                'phone' => 'required',
                'department' => 'required',
                'specialization' => 'required',
            ]);

        $doctor = doctor::findOrFail($id);
        $doctor->name = $this->name;
        $doctor->email = $this->email;
        $doctor->password = bcrypt($this->password);
        $doctor->address = $this->address;
        $doctor->phone = $this->phone;
        $doctor->department = $this->department;
        $doctor->specialization = $this->specialization;

        if ($this->Photo) {
            $this->validate([
                'photo' => 'required|image|max:3072',
            ]);
            Storage::disk('public')->delete($doctor->photo_path);
            $doctor->photo_path = $this->storeImage();

        }

        $doctor->save();

        $this->name="";
        $this->email="";
        $this->password="";
        $this->address="";
        $this->phone="";
        $this->department="";
        $this->specialization="";
        $this->photo="";
        $this->edit_photo="";

        session()->flash('message', 'doctor Updated Successfully.');

        $this->button_text = "Add New Doctor";

}

     public function delete($id)
    {
        $doctor = doctor::find($id);
        Storage::disk('public')->delete($doctor->photo_path);
        $doctor->delete();
        session()->flash('message', 'doctor Deleted Successfully.');
    }
    public function render()
    {
        return view('livewire.admins.doctors',[
            'doctors'=>doctor::latest()->paginate(10),
        ])->layout('admins.layouts.app');
    }
}
