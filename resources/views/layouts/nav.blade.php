<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}">Inicio</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('empleados.index')}}">Empleados</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('proyectos.index')}}">Proyectos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('departamentos.index')}}">Departamentos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('listados')}}">Listados</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('formempleado')}}">Añadir empleado a departamento</a>
        </li>
    </ul>
</nav>