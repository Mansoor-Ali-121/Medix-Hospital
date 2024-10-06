<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctormangModel extends Model
{
    use HasFactory;


    protected $table = 'doctors'; // Specify the correct table name

    protected $fillable = [
        'name',
        'email',
        'picture',
        'timing',
        'speciality',
        'department_id',
        'qualification'
    ];

}
