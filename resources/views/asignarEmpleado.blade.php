@extends('layouts.app')
@section('content')
<form action="{{route('asignarempleado')}}" method="POST">
	@csrf
	<br><br>
	Empleado: <select name="empleado">
		@foreach($empleados as $empleado)
			<option value="{{$empleado->id}}">{{$empleado->nombre}} {{$empleado->apellido}}</option>
		@endforeach
	</select><br><br>

	Departamento: <select name="departamento">
		@foreach($departamentos as $departamento)
			<option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
		@endforeach
	</select><br><br>
	Tipo de empleado: <select name="tipo">
		<option value="empleado">Empleado</option>
		<option value="jefe">Jefe</option>
	</select><br><br>
	
	<input type="submit" name="enviar" value="Enviar">

</form>

@endsection