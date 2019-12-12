@extends('layouts.app')

@section('content')

<h2>Departamentos</h2>

@foreach($departamentos as $departamento)
ID: {{$departamento->id}} <br>
Nombre: {{$departamento->nombre}}<br>
Trabajadores: 
@foreach($departamento->empleado as $empleado)
<a href="{{route('empleados.show',$empleado->id)}}"> {{$empleado->nombre}}</a>
@endforeach
<br>Jefe de departamento: <a href="{{route('empleados.show',$departamento->jefe->id)}}"> {{$departamento->jefe->nombre}}</a>
@endforeach


@endsection
