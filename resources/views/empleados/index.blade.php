@extends('layouts.app')
@section('content')
<h2>Empleados</h2>
<table style="text-align: center;">
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Proyecto</th>
    <th>Departamento</th>
  </tr>
  @foreach ($empleados as $empleado)
  <tr>
    <td>
      <a href="{{route('showempleados',$empleado->id)}}">
        {{$empleado->id}}
      </a>
    </td>
    <td>{{$empleado->nombre}}</td>
    <td>{{$empleado->apellido}}</td>
    <td>
      @if (!is_null($empleado->proyecto))
      <a href="{{route('showproyectos',$empleado->proyecto->id)}}"> 
        {{$empleado->proyecto->titulo}}
      </a>
      @endif
    </td>
    <td>{{$empleado->departamento->nombre}}</td>

  </tr>
  @endforeach
</table>
@endsection