@extends('layouts.app')
@section('content')

<h2>Proyectos</h2>
@foreach ($proyectos as $proyecto)
ID: {{$proyecto->id}}<br>
Nombre: {{$proyecto->nombre}}<br>
Titulo: {{$proyecto->titulo}}<br>
Fecha de inicio: {{$proyecto->fechainicio}}<br>
Fecha final:{{$proyecto->fechafin}}<br>
Horas estimadas: {{$proyecto->horasestimadas}}<br>
Empleados del proyecto:
@foreach($proyecto->empleados as $empleado)
<a href="{{route('empleados.show',$empleado->id)}}">{{$empleado->nombre}}  {{$empleado->apellido}}</a>
@endforeach
@isset($proyecto->empleado)
<br>Responsable del proyecto: <a href="{{route('empleados.show',$proyecto->empleado->id)}}">{{$proyecto->empleado->nombre}}  {{$proyecto->empleado->apellido}}</a>
@endisset
@endforeach
@endsection