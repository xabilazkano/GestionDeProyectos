@extends('layouts.app')
@section('content')
<h2>Añadir proyecto</h2>

<form method="post" action="{{route('enviarproyecto')}}">
	@csrf
	Nombre: <input type="text" name="nombre">
	@if ($errors->has('nombre'))
	<b>{{$errors->first('nombre')}}</b>
	@endif <br><br>
	Titulo: <input type="text" name="titulo">
	@if ($errors->has('titulo'))
	<b>{{$errors->first('titulo')}}</b>
	@endif <br><br>
	Fecha de inicio: <input type="date" name="inicio">
	@if ($errors->has('inicio'))
	<b>{{$errors->first('inicio')}}</b>
	@endif <br><br>
	Fecha final: <input type="date" name="final">
	@if ($errors->has('final'))
	<b>{{$errors->first('final')}}</b>
	@endif <br><br>
	Horas estimadas: <input type="number" name="horas">
	@if ($errors->has('horas'))
	<b>{{$errors->first('horas')}}</b>
	@endif <br><br>
	<input type="submit" value="Enviar" name="enviar">
</form>

@endsection