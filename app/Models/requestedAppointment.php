<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use the42coders\Workflows\Triggers\WorkflowObservable;

class requestedAppointment extends Model
{
    use HasFactory,softDeletes;
    use WorkflowObservable;
    protected $fillable=[
        'name',
        'email',
        'phone',
        'doctor_id',
        'message',
        'address',
        'stime',
    ];

    public function doctor()
    {
        return $this->belongsTo(doctor::class);
    }
}
