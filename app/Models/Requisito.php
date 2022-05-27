<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
    protected $fillable = ['convocatoria','usuario','requisitos', 'calificacion',
    ];

    static $rules = [
		'convocatoria' => 'required',
		'usuario' => 'required|unique:requisitos',
		'requisitos' => 'required',
    'calificacion' => 'min: 0|max: 10',
    ];
}