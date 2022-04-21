<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integrantes extends Model
{
    protected $fillable = ['num_Integrantes', 'nombre1', 'codigo1', 'semestre1', 'carrera1', 'cu1', 'telefono1', 
    'nombre2', 'codigo2', 'semestre2', 'carrera2', 'cu2', 'telefono2',
    'nombre3', 'codigo3', 'semestre3', 'carrera3', 'cu3', 'telefono3',
    'nombre4', 'codigo4', 'semestre4', 'carrera4', 'cu4', 'telefono4',
    'nombre5', 'codigo5', 'semestre5', 'carrera5', 'cu5', 'telefono5'
];
}
