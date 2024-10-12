<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentmangModel extends Model
{
    use HasFactory;
    protected $table = 'appointments'; // Specify the correct table name
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
