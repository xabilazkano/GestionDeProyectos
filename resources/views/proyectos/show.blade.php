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
Responsables del proyecto:
@foreach($proyecto->empleado as $empleado)
{{$empleado->nombre}}  {{$empleado->apellido}}
@endforeach
@endforeach
@endsection