<?php

namespace App\Http\Livewire;

use App\Models\employee;
use App\Models\doctor;

use App\Models\requestedappointment;
use Livewire\Component;
use PhpParser\Comment\Doc;

class Appointmentform extends Component
{
    public $name;
    public $email;
    public $phone;
    public $doctor;
    public $stime;
    public $address;
    public $message;

    public function store_requested_appointment()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'stime' => 'required',
            'phone' => 'required|numeric|max:10000000000000',
            'doctor' => 'required',
            'address' => 'required',
            'message' => 'required|max:550',
        ]);

        // Obtener el doctor_id a partir del employee_id (name del formulario)
        $employeeName = $this->doctor;
        $employeeId = employee::where('name', $employeeName)->first();
        $dtrEmployee_Id = doctor::where('employee_id', $employeeId["id"])->first();
        if ($dtrEmployee_Id) {
            $doctor_id = $dtrEmployee_Id["id"];
        } else {
            // Manejar el caso donde no se encuentra el doctor con el employee_id proporcionado
            // Puede ser un mensaje de error, asignar un valor predeterminado, etc.
            $doctor_id = null; // O algún valor predeterminado según tu lógica de negocio
        }

        // Crear la cita solicitada con el doctor_id
        requestedappointment::create([
            'name'    => $this->name,
            'email'   => $this->email,
            'phone'   => $this->phone,
            'stime'   => $this->stime,
            'address' => $this->address,
            'doctor_id' => $doctor_id,
            'message' => $this->message,
        ]);

        // Unset variables
        $this->name = "";
        $this->email = "";
        $this->stime = "";
        $this->phone = "";
        $this->doctor = "";
        $this->address = "";
        $this->message = "";

        session()->flash('message', 'Your Appointment Added successfully.');
    }
    public function render()
    {
        $doctors = doctor::join('employees', 'doctors.employee_id', '=', 'employees.id')
            ->select('doctors.id', 'employees.name as name')
            ->get();

        return view('livewire.appointmentform', compact('doctors'));
    }
}
