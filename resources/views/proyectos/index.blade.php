@extends('layouts.app')
@section('content')
<h2>Proyectos</h2>
<center><a href="{{route('addproyecto')}}">Añadir proyecto</a></center><br>
<table style="text-align: center;">
  <tr>
    <th>Id</th>
    <th>Titulo</th>
    <th>Responsables del proyecto</th>
    <th></th>
    <th></th>
  </tr>
  @foreach ($proyectos as $proyecto)
  <tr>
    <td>
      <a href="{{route('showproyectos',$proyecto->id)}}">
        {{$proyecto->id}}
      </a>
    </td>
    <td>{{$proyecto->titulo}}</td>
    <td>
      @foreach($proyecto->empleado as $empleado)
      <a href="{{route('showempleados',$empleado->id)}}">{{$empleado->nombre}}  {{$empleado->apellido}}</a>
      @endforeach
    </td>
    <td><a href="{{route('deleteproyecto',$proyecto->id)}}">Eliminar</a></td>
    <td><a href="{{route('modificarproyecto',$proyecto->id)}}">Editar</a></td>
  </tr>
  @endforeach
</table>
@endsection
