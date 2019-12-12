@extends('layouts.app')
@section('content')
<form action="{{route('trabajarProyecto',$id)}}" method="POST">
	@csrf
	<br><br>
	<select name="proyecto_id">
		@foreach($proyectos as $proyecto)
		<option value="{{$proyecto->id}}">{{$proyecto->titulo}}</option>
		@endforeach
	</select><br><br>
	Fecha de inicio: <input type="date" name="inicio">
	Fecha final: <input type="date" name="final">
	<input type="submit" name="enviar" value="Enviar">

</form>

@endsection