@extends('layouts.app')
@section('content')
<h2>Editar proyecto</h2>

<form method="post" action="{{route('updateproyecto')}}">
@csrf
Titulo: <input type="text" name="titulo"><br><br>
Fecha de inicio: <input type="date" name="inicio"><br><br>
Fecha final: <input type="date" name="final"><br><br>
Horas estimadas: <input type="number" name="horas"><br><br>
<input type="hidden" name="id" value="{{$id}}">
<input type="submit" value="Enviar" name="enviar">
</form>

@endsection