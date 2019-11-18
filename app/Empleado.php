<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
	public function proyecto()
	{
		return $this->belongsToMany('App\Proyecto')->withPivot('fechainicio','fechafin');
	}

	public function departamento()
	{
		return $this->belongsTo('App\Departamento');
	}
}
