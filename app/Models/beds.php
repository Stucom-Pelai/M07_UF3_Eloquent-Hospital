<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beds extends Model
{
    use HasFactory;
    protected $fillable=[
        'room_id',
        'patient_id',
        'status',
        'size', 
    ];

    public function room()
    {
        return $this->belongsTo(rooms::class);
    }
    public function patient()
    {
        return $this->belongsTo(patient::class);
    }
}
