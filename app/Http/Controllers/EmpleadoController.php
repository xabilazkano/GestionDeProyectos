<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class EmpleadoController extends Controller
{
    public function index(){
    	$empleados = Empleado::all();
    	return view('empleados/index',['empleados'=>$empleados]);
    }

    public function show($id){
    	$empleados = Empleado::all()->where('id',$id);
    	return view('empleados/show',['empleados'=>$empleados]);
    }
}
