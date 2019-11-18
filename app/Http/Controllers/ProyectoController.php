<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
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

	public function add(Request $request){
		$nombre = $request->input('nombre');
		$titulo = $request->input('titulo');
		$inicio = $request->input('inicio');
		return view('home');
	}
}
