@extends('layouts.app')
@section('content')
<h2>Empleados</h2>
@foreach ($empleados as $empleado)
  ID: {{$empleado->id}}<br>
  Nombre: {{$empleado->nombre}}<br>
  Apellido: {{$empleado->apellido}}<br>
  Email: {{$empleado->email}}<br>
  Telefono{{$empleado->telefono}}<br>
  @if (!is_null($empleado->proyecto))
  Proyecto: {{$empleado->proyecto->titulo}}
  @endif
@endforeach
@endsection