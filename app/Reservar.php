<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservar extends Model
{
	protected $fillable = [
        'nombre', 'dir', 'telefono', 'email', 'ropaBlanca', 'ropaColor', 'cobijaCobertor', 'horario','fecha'
    ];

	protected $table = 'reservacion';
}
