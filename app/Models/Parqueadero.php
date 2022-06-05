<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Parqueadero
 *
 * @property $id
 * @property $usuario
 * @property $marca
 * @property $placa
 * @property $entrada
 * @property $salida
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Parqueadero extends Model
{
    
    static $rules = [
		'usuario' => 'required',
		'marca' => 'required',
		'placa' => 'required',
		'entrada' => 'required',
		'salida' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['usuario','marca','placa','entrada','salida'];



}
