<?php

namespace App\Models;

use App\Http\Livewire\Admins\Bills;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class patient extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'gender',
        'age',
        'bloodgroup',
        'photo_path',
        'status',
        'image',
        'description',
        'disease',
        'doctor', 
        'admit_date',
        'discharge_date',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function birthReports()
    {
        return $this->hasMany(BirthReport::class);
    }

    public function beds(){
        return $this->hasMany(beds::class);
    }

    public function bills(){
        return $this->hasMany(bill::class, 'patients_id');
    }
    
    public function operationReports(){
        return $this->hasMany(operationreport::class);
    }

    public function patientCheckUp(){
        return $this->hasMany(patientCheckup::class);
    }

    public function payments(){
        return $this->hasMany(payment::class);
    }

    public function stays(){
        return $this->hasMany(stay::class);
    }
}