<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
	protected $fillable = [
        'nombre', 'tipo', 'tipo_productos', 'direccion', 'nombreRepresentante', 'email', 'telefono', 'mensaje'
    ];

	protected $table = 'proveedor';
}
