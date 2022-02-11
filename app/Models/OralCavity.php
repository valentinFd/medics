<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OralCavity extends Model
{
    use HasFactory;

    protected $fillable = [
        'throat1',
        'throat2',
        'tonsils',
        'tonsil_stones'
    ];
}
