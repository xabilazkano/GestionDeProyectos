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
}
