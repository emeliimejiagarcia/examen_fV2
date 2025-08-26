<div class="collapse navbar-collapse" id="sidenav-collapse-main">
    <!-- Collapse header -->
    <div class="navbar-collapse-header d-md-none">
        <div class="row">
            <div class="col-6 collapse-brand">
                <a href="#">
                    <img src="{{ asset('img/brand/blue.png') }}">
                </a>
            </div>
            <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                    aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <ul class="navbar-nav">
        <li class="nav-item {{ Request::route()->named('dashboard') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('dashboard') ? 'active' : '' }}"
                href="{{ route('dashboard') }}" wire:navigate>
                <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
        </li>
    </ul>
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Panel de Administración</h6>
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Otras Acciones</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
        <li class="nav-item {{ Request::route()->named('profile.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('profile.index') ? 'active' : '' }}"
                href="{{ route('profile.index') }}" wire:navigate>
                <i class="fas fa-user text-blue"></i> Perfil
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt text-gray"></i> Cerrar Sesión
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Ejemplos</h6>
    <!-- Navigation -->
    <ul class= "navbar-nav mb-md-3">

        <li class="nav-item {{ Request::route()->named('students.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('students.index') ? 'active' : '' }}"
                href="{{ route('students.index') }}" wire:navigate>
                <i class="fa-solid fa-user"></i> Estudiantes
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('tuitions.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('tuitions.index') ? 'active' : '' }}"
                href="{{ route('tuitions.index') }}" wire:navigate>
                <i class="fa-solid fa-file"></i> Matrículas
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('careers.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('careers.index') ? 'active' : '' }}"
                href="{{ route('careers.index') }}" wire:navigate>
                <i class="fa-solid fa-building-columns"></i> Carreras
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('teachers.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('teachers.index') ? 'active' : '' }}"
                href="{{ route('teachers.index') }}" wire:navigate>
                <i class="fa-solid fa-person-chalkboard"></i> Docentes
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('sections.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('sections.index') ? 'active' : '' }}"
                href="{{ route('sections.index') }}" wire:navigate>
                <i class="fa-solid fa-puzzle-piece"></i> Secciónes
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('subjects.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('subjects.index') ? 'active' : '' }}"
                href="{{ route('subjects.index') }}" wire:navigate>
                <i class="fa-solid fa-objects-column"></i> Asignatura
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('grades.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('grades.index') ? 'active' : '' }}"
                href="{{ route('grades.index') }}" wire:navigate>
                <i class="fa-solid fa-objects-column"></i> Nota
            </a>
        </li>



    </ul>
</div>
