@extends('layouts.app2')
@section('listados')
<div class="row">
	<div class="col-3">
		<div class="listado p-5 border">
			<h2>Listados</h2>
			<ul class="nav flex-column">
				<li class="nav-item">
					<a class="nav-link" href="{{route('indexActuales')}}">Proyectos actuales</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('sinproyecto')}}">Empleados que no son responsables de un proyecto</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('multi')}}">Empleados con más de un proyecto</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="col-9">
		@isset($proyectos)
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
					<a href="{{route('proyectos.index',$proyecto->id)}}">
						{{$proyecto->id}}
					</a>
				</td>
				<td>{{$proyecto->titulo}}</td>
				<td>
					@foreach($proyecto->empleados as $empleado)
					<a href="{{route('empleados.show',$empleado->id)}}">{{$empleado->nombre}}  {{$empleado->apellido}}</a>
					@endforeach
				</td>
				<td><a href="{{route('proyectos.destroy',$proyecto->id)}}">Eliminar</a></td>
				<td><a href="{{route('proyectos.edit',$proyecto->id)}}">Editar</a></td>
			</tr>
			@endforeach
		</table>
		@endisset
		@isset($empleados)
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
					<a href="{{route('showproyectos',$empleado->proyecto->id)}}"> 
						{{$empleado->proyecto->titulo}}
					</a>
					@endisset
				</td>
				<td>
					@if (!is_null($empleado->departamento))
					<a href="">{{$empleado->departamento->nombre}}</a>
					@endif
				</td>

			</tr>
			@endforeach
		</table>
		@endisset
	</div>
</div>
@endsection
