<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integrantes extends Model
{
    protected $fillable = ['nombre_del_equipo','convocatoria','num_Integrantes', 'nombre1', 'codigo1', 'semestre1', 'carrera1', 'cu1', 'telefono1', 
    'nombre2', 'codigo2', 'semestre2', 'carrera2', 'cu2', 'telefono2',
    'nombre3', 'codigo3', 'semestre3', 'carrera3', 'cu3', 'telefono3',
    'nombre4', 'codigo4', 'semestre4', 'carrera4', 'cu4', 'telefono4',
    'nombre5', 'codigo5', 'semestre5', 'carrera5', 'cu5', 'telefono5',
    ];

    static $rules = [
		'nombre_del_equipo' => 'required|unique:integrantes',
		'convocatoria' => 'required',
		'nombre1' => 'required',
		'codigo1' => 'required|max:10',
		'semestre1' => 'required',
		'carrera1' => 'required',
		'cu1' => 'required',
		'telefono1' => 'required|max:10',
        'nombre2' => 'required',
		'codigo2' => 'required|max:10',
		'semestre2' => 'required',
		'carrera2' => 'required',
		'cu2' => 'required',
		'telefono2' => 'required|max:10',
        'nombre3' => 'required',
		'codigo3' => 'required|max:10',
		'semestre3' => 'required',
		'carrera3' => 'required',
		'cu3' => 'required',
		'telefono3' => 'required|max:10',
		'codigo4' => 'max:10',
		'telefono4' => 'max:10',
		'codigo5' => 'max:10',
		'telefono5' => 'max:10',
		'Kardex' => "required",
    ];
}
