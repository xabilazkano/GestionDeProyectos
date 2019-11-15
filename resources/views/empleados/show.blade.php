@extends('layouts.app')
@section('content')
<h2>Empleados</h2>
<table style="text-align: center;">
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
    <th>Telefono</th>
    <th>Proyecto</th>
  </tr>
  @foreach ($empleados as $empleado)
  <tr>
    <td>{{$empleado->id}}</td>
    <td>{{$empleado->nombre}}</td>
    <td>{{$empleado->apellido}}</td>
    <td>{{$empleado->email}}</td>
    <td>{{$empleado->telefono}}</td>
    <td>
      @if (!is_null($empleado->proyecto))
      {{$empleado->proyecto->titulo}}
      @endif
    </td>
  </tr>
  @endforeach
</table>
@endsection