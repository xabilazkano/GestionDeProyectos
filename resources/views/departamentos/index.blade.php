@extends('layouts.app')

@section('content')

<h2>Departamentos</h2>

<table style="text-align: center;">
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Empleados</th>
  </tr>
  @foreach($departamentos as $departamento)
  <tr>
    <td>
      <a href="{{route('departamentos.show',$departamento->id)}}">
        {{$departamento->id}}
      </a>
    </td>
    <td>{{$departamento->nombre}}</td>
    <td>
      @foreach($departamento->empleado as $empleado)
      <a href="{{route('empleados.show',$empleado->id)}}">  {{$empleado->nombre}}</a>
      @endforeach
    </td>
  </tr>
  @endforeach
</table>
@endsection
