<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function empleado()
    {
    	return $this->hasMany('App\Empleado');
    }

     public function jefe()
    {
        return $this->hasOne('App\Empleado', 'id', 'jefe_id');
    }
}
