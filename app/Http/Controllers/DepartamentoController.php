<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

class DepartamentoController extends Controller
{
     public function index(){
    	$departamentos = Departamento::all();
    	return view('departamentos/index',['departamentos'=>$departamentos]);
    }

    public function show($id){
    	$departamentos = Departamento::all()->where('id',$id);
    	return view('departamentos/show',['departamentos'=>$departamentos]);
    }
}
