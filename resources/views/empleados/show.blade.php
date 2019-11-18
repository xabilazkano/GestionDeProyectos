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
Proyecto: {{$proyecto->titulo}}
@endforeach
@endforeach
@endsection