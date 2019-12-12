<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
	public function empleado(){
		return $this->belongsto('App\Empleado');
	}
	public function empleados(){
		return $this->belongstomany('App\Empleado')->withPivot('fechainicio', 'fechafin');

	}
}