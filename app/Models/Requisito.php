<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Requisito
 *
 * @property $convocatoria
 * @property $usuario
 * @property $requisitos
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Requisito extends Model
{
    
    static $rules = [
		'convocatoria' => 'required',
		'usuario' => 'required',
		'requisitos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['convocatoria','usuario','requisitos'];



}
