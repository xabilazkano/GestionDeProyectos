@extends('layouts.app')
@section('content')
<h2>Empleados</h2>
@foreach ($empleados as $empleado)
ID: {{$empleado->id}}<br>
Nombre: {{$empleado->nombre}}<br>
Apellido: {{$empleado->apellido}}<br>
Email: {{$empleado->email}}<br>
Telefono{{$empleado->telefono}}<br>
@foreach($empleado->proyecto as $proyecto)
Proyecto: <a href="{{route('showproyectos',$proyecto->id)}}"> {{$proyecto->titulo}}</a><br>
@endforeach
Departamento: <a href="{{route('showdepartamentos',$empleado->departamento->id)}}">{{$empleado->departamento->nombre}}</a><br> 
@isset($empleado->jefeDepartamento)
Es el jefe del departamento de <a href="{{route('showdepartamentos',$empleado->jefeDepartamento->id)}}"> {{$empleado->jefeDepartamento->nombre}}</a>
@endisset
@endforeach
@endsection