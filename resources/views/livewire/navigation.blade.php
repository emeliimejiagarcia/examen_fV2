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

        <li class="nav-item {{ Request::route()->named('responsibles.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('responsibles.index') ? 'active' : '' }}"
                href="{{ route('responsibles.index') }}" wire:navigate>
                <i class="fa-solid fa-user"></i> Responsables
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('vendors.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('vendors.index') ? 'active' : '' }}"
                href="{{ route('vendors.index') }}" wire:navigate>
                <i class="fa-solid fa-user"></i> Proveedores
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('technological_equipments.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('technological_equipments.index') ? 'active' : '' }}"
                href="{{ route('technological_equipments.index') }}" wire:navigate>
                <i class="fa-solid fa-user"></i> Equipos Tecnológicos
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('type_equipments.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('type_equipments.index') ? 'active' : '' }}"
                href="{{ route('type_equipments.index') }}" wire:navigate>
                <i class="fa-solid fa-user"></i> Tipos de Equipos Tecnológicos
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('academic_areas.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('academic_areas.index') ? 'active' : '' }}"
                href="{{ route('academic_areas.index') }}" wire:navigate>
                <i class="fa-solid fa-user"></i> Áreas Académicas
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('loans.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('loans.index') ? 'active' : '' }}"
                href="{{ route('loans.index') }}" wire:navigate>
                <i class="fa-solid fa-user"></i> Préstamos
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('registrations.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('registrations.index') ? 'active' : '' }}"
                href="{{ route('registrations.index') }}" wire:navigate>
                <i class="fa-solid fa-user"></i> Registros
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('loan_histories.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('loan_histories.index') ? 'active' : '' }}"
                href="{{ route('loan_histories.index') }}" wire:navigate>
                <i class="fa-solid fa-user"></i> Historial de Préstamos
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('maintenance_reports.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('maintenance_reports.index') ? 'active' : '' }}"
                href="{{ route('maintenance_reports.index') }}" wire:navigate>
                <i class="fa-solid fa-user"></i> Informes de Mantenimiento
            </a>
        </li>






    </ul>
</div>
