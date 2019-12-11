<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{

	protected $fillable = ["nombre","apellido","email","telefono"];

	public function proyecto()
	{
		return $this->belongsToMany('App\Proyecto')->withPivot('fechainicio','fechafin');
	}

	public function departamento()
	{
		return $this->belongsTo('App\Departamento');
	}

	public function jefeDepartamento()
    {
        return $this->belongsTo('App\Departamento', 'id', 'jefe_id');
    }
}
