<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Convocatoria
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $departamento
 * @property $email
 * @property $telefono
 * @property $inicio
 * @property $fin
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Convocatoria extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'departamento' => 'required',
		'email' => 'required',
		'telefono' => 'required',
		'inicio' => 'required',
		'fin' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','departamento','email','telefono','inicio','fin'];



}
