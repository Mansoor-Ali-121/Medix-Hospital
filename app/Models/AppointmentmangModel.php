<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentmangModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'contact',
        'doctor',
        'date',
        'time',
        'message'
    ];
}