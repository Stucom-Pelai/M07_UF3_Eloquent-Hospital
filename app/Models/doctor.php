<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class doctor extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable=[
        'employee_id',
        'name'
    ];

    public function employee()
    {
        return $this->belongsTo(employee::class);
    }
    
}
