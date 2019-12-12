<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Http\Requests\Validation;
class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index',['proyectos'=>$proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Validation $request)
    {
        $nombre = $request->input('nombre');
        $titulo = $request->input('titulo');
        $inicio = $request->input('inicio');
        $final = $request->input('final');
        $horas = $request->input('horas');

        Proyecto::insert(
            ['nombre'=>$nombre,'titulo'=>$titulo,'fechainicio'=>$inicio,'fechafin'=>$final,'horasestimadas'=>$horas]
        );
        $proyectos = Proyecto::all();
        return view('proyectos.index',['proyectos'=>$proyectos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyectos = Proyecto::all()->where('id',$id);
        return view('proyectos.show',['proyectos'=>$proyectos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('proyectos.edit',['id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Proyecto::where('id',$id)->update(['titulo'=>$request->input('titulo'),'fechainicio'=>$request->input('inicio'),'fechafin'=>$request->input('final'),'horasestimadas'=>$request->input('horas')]);
        $proyectos = Proyecto::all();
        return view('proyectos.index',['proyectos'=>$proyectos]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proyecto::find($id)->delete();
        $proyectos=Proyecto::all();
        return redirect(route('proyectos.index'));
    }

    public function indexActuales(){
        $proyectos = Proyecto::all()->where('fechafin','>',date('Y-m-d'));
        return view('listados', ['proyectos'=>$proyectos]);
    }
}
