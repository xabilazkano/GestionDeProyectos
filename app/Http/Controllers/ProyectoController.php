<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Http\Requests\Validation;
class ProyectoController extends Controller
{
	public function index(){
		$proyectos = Proyecto::all();
		return view('proyectos/index',['proyectos'=>$proyectos]);
	}


	public function show($id){
		$proyectos = Proyecto::all()->where('id',$id);
		return view('proyectos/show',['proyectos'=>$proyectos]);
	}

	public function delete($id){
		Proyecto::where("id",$id)->delete();
		$proyectos=Proyecto::all();
		return view("proyectos/index",['proyectos'=>$proyectos]);
	}

	public function store(Validation $request){

		
		$nombre = $request->input('nombre');
		$titulo = $request->input('titulo');
		$inicio = $request->input('inicio');
		$final = $request->input('final');
		$horas = $request->input('horas');

		Proyecto::insert(
			['nombre'=>$nombre,'titulo'=>$titulo,'fechainicio'=>$inicio,'fechafin'=>$final,'horasestimadas'=>$horas]
		);
		$proyectos = Proyecto::all();
		return view('proyectos/index',['proyectos'=>$proyectos]);
	}

	public function update(Request $request){
		Proyecto::where('id',$request->input('id'))->update(['titulo'=>$request->input('titulo'),'fechainicio'=>$request->input('inicio'),'fechafin'=>$request->input('final'),'horasestimadas'=>$request->input('horas')]);
		$proyectos = Proyecto::all();
		return view('proyectos/index',['proyectos'=>$proyectos]);
	}
}
