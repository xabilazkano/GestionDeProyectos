<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\EmpleadoProyecto;
use App\Departamento;
use App\Empleado;

class AsignarController extends Controller
{
	public function asignarProyecto($id){
		$proyectos = Proyecto::all();
		return view('asignarProyecto',['proyectos'=>$proyectos,'id'=>$id]);
	}

	public function trabajarProyecto(Request $request,$id){
		EmpleadoProyecto::insert(['empleado_id'=>$id,'proyecto_id'=>$request->input('proyecto_id'),'fechainicio'=>$request->input('inicio'),'fechafin'=>$request->input('final')]);
		return redirect(route('empleados.index'));
	}

	public function formempleado(){

		$empleados = Empleado::all();
		$departamentos = Departamento::all();

		return view('asignarEmpleado',['empleados'=>$empleados,'departamentos'=>$departamentos]);
	}

	public function asignarEmpleado(Request $request) {
		if($request->input('tipo')=="empleado"){
			Empleado::where('id',$request->input('empleado'))->update(['departamento_id'=>$request->input('departamento')]);
		}
		elseif ($request->input('tipo')=="jefe") {
			Departamento::where('id',$request->input('departamento'))->update(['jefe_id'=>$request->input('empleado')]);
		}
		return redirect(route('departamentos.index'));
	}
}
