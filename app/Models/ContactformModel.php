<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactformModel extends Model
{
    use HasFactory;

    protected $table = 'contacts';  // Corrected from $teble to $table

    protected $fillable = [
        'name',
        'email',
        'message'
    ];
}
