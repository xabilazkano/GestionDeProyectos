<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
	public function proyecto()
	{
		return $this->hasOne('App\Proyecto');
	}
}
