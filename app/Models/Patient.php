<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'date',
        'id',
        'name',
        'surname',
        'complaints_and_history',
        'comorbidities',
        'drug_intolerance_and_allergies',
        'nose_id',
        'oral_cavity_id'
    ];
}
