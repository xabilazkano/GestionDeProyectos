@extends('layouts.app')
@section('content')
<h2>Empleados</h2>
<table style="text-align: center;">
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Proyectos</th>
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
      @foreach($empleado->proyecto as $proyecto)
      <a href="{{route('showproyectos',$proyecto->id)}}"> 
        {{$proyecto->titulo}}
      </a>
      @endforeach
    </td>
    <td>{{$empleado->departamento->nombre}}</td>

  </tr>
  @endforeach
</table>
@endsection