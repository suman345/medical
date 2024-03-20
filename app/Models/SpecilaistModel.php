<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecilaistModel extends Model
{
    use HasFactory;
    protected $table = 'doctor_specialists'; // If your table name differs from the model name + 's'

    protected $fillable = [
        'name', // Specify fields that can be mass-assigned
    ];

}
