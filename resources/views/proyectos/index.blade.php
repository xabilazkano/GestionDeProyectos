@extends('layouts.app')
@section('content')
<h2>Proyectos</h2>
<center><a href="{{route('proyectos.create')}}">Añadir proyecto</a></center><br>
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
      <a href="{{route('proyectos.show',$proyecto->id)}}">
        {{$proyecto->id}}
      </a>
    </td>
    <td>{{$proyecto->titulo}}</td>
    <td>
      @isset($proyecto->empleado)
      <a href="{{route('empleados.show',$proyecto->empleado->id)}}">{{$proyecto->empleado->nombre}}  {{$proyecto->empleado->apellido}}</a>
      @endisset
    </td>
   
    <td><a href="{{route('proyectos.edit',$proyecto->id)}}">Editar</a></td>
    <td>
      <form action="{{route('proyectos.destroy',$proyecto->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" name="delete" value="Delete">
      </form>

    </td>
  </tr>
  @endforeach
</table>
@endsection
