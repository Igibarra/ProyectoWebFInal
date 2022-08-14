<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservacione
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $email
 * @property $telefono
 * @property $servicio
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reservacione extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidos' => 'required',
		'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
		'telefono' => ['required', 'int'],
		'servicio' => 'required',
		'fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','email','telefono','servicio','fecha'];


}
