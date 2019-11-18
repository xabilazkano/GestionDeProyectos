@extends('layouts.app')

@section('content')

  <h2>Departamentos</h2>

 
  @foreach($departamentos as $departamento)
   ID: {{$departamento->id}} <br>
   Nombre: {{$departamento->nombre}}<br>
  @endforeach


@endsection
