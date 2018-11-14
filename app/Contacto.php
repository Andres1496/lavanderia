<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable = [
        'nombre', 'email', 'asunto', 'mensaje'
            ];

	protected $table = 'contacto';
}
