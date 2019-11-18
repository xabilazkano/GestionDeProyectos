@extends('layouts.app')
@section('content')
<h2>Añadir proyecto</h2>

<form method="post" action="{{route('enviarproyecto')}}">
@csrf
Nombre: <input type="text" name="nombre"><br><br>
Titulo: <input type="text" name="titulo"><br><br>
Fecha de inicio: <input type="date" name="inicio"><br><br>
Fecha final: <input type="date" name="final"><br><br>
Horas estimadas: <input type="number" name="horas"><br><br>
<input type="submit" value="Enviar" name="enviar">
</form>

@endsection