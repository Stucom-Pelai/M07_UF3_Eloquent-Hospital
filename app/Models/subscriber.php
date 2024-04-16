<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use the42coders\Workflows\Triggers\WorkflowObservable;

class subscriber extends Model
{
    use HasFactory,softDeletes;
    use WorkflowObservable;
    protected $fillable=[
        'email'
    ];
}
