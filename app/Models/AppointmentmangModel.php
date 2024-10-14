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
        'doctor', // This should be the foreign key that references the doctors table
        'date',
        'time',
        'message'
    ];

    public function doctor()
    {
        return $this->belongsTo(DoctormangModel::class, 'doctor'); // 'doctor' is the foreign key in the appointments table
    }
}
