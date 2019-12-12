@extends('layouts.app')
@section('content')
<h2>Empleados</h2>
@foreach ($empleados as $empleado)
ID: {{$empleado->id}}<br>
Nombre: {{$empleado->nombre}}<br>
Apellido: {{$empleado->apellido}}<br>
Email: {{$empleado->email}}<br>
Telefono{{$empleado->telefono}}<br>
Proyectos:
@foreach($empleado->proyectos as $proyecto)
<a href="{{route('showproyectos',$proyecto->id)}}"> {{$proyecto->titulo}}</a>
@endforeach <br>
@isset($empleado->proyecto)
Responsable del proyecto: <a href="{{route('showproyectos',$empleado->proyecto->id)}}"> 
	{{$empleado->proyecto->titulo}}
</a>
@endisset
<br>Departamento: <a href="{{route('showdepartamentos',$empleado->departamento->id)}}">{{$empleado->departamento->nombre}}</a><br> 
@isset($empleado->jefeDepartamento)
Es el jefe del departamento de <a href="{{route('showdepartamentos',$empleado->jefeDepartamento->id)}}"> {{$empleado->jefeDepartamento->nombre}}</a>
@endisset
@endforeach
@endsection