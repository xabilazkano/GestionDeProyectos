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
      <a href="{{route('empleados.show',$empleado->id)}}">
        {{$empleado->id}}
      </a>
    </td>
    <td>{{$empleado->nombre}}</td>
    <td>{{$empleado->apellido}}</td>
    <td>
      @isset($empleado->proyecto)
      <a href="{{route('proyectos.show',$empleado->proyecto->id)}}"> 
        {{$empleado->proyecto->titulo}}
      </a>
      @endisset
    </td>
    <td>
      @if (!is_null($empleado->departamento))
      <a href="{{route('departamentos.show',$empleado->departamento->id)}}">{{$empleado->departamento->nombre}}</a>
      @endif
    </td>

  </tr>
  @endforeach
</table>
@endsection