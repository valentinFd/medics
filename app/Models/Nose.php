<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nose extends Model
{
    use HasFactory;

    protected $fillable = [
        'outer_form',
        'mucous_membrane_1',
        'mucous_membrane_2',
        'passages',
        'phlegm',
        'septum',
        'breathing'
    ];
}
