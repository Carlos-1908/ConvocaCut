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
 * @property $email_Dudas
 * @property $telefono_Dudas
 * @property $requisitos
 * @property $fecha_de_Registro
 * @property $fecha_de_Revision
 * @property $fecha_de_Emision_de_Constancias
 * @property $fecha_de_Envio_de_Proyecto
 * @property $fecha_de_Publicacion_de_Resutados
 * @property $created_at
 * @property $updated_at
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Convocatoria extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'departamento' => 'required',
		'email_Dudas' => 'required',
		'telefono_Dudas' => 'required',
		'requisitos' => 'required',
		'fecha_de_Registro' => 'required',
		'fecha_de_Revision' => 'required',
		'fecha_de_Emision_de_Constancias' => 'required',
		'fecha_de_Envio_de_Proyecto' => 'required',
		'fecha_de_Publicacion_de_Resutados' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','departamento','email_Dudas','telefono_Dudas','requisitos','fecha_de_Registro','fecha_de_Revision','fecha_de_Emision_de_Constancias','fecha_de_Envio_de_Proyecto','fecha_de_Publicacion_de_Resutados'];



}
