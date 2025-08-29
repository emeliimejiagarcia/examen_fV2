@extends('layouts.panel')
@section('title', 'Préstamos')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                {{-- Header --}}
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Préstamos</h3>
                        <a href="{{ route('loans.create') }}" class="btn" style="background-color: #0B3D91; color: white;">
                            <i class="fas fa-plus"></i> Nuevo Préstamo
                        </a>
                    </div>

                    {{-- Filtros --}}
                    <form action="{{ route('loans.index') }}" method="GET" class="mt-3">
                        <div class="row g-2 align-items-center">
                            {{-- Filtrar por usuario --}}
                            <div class="col-md-3">
                                <input type="text" name="username" class="form-control"
                                    placeholder="Buscar por usuario..." value="{{ request('username') }}">
                            </div>

                            {{-- Filtrar por tipo de usuario --}}
                            <div class="col-md-3">
                                <select name="user_type" class="form-control">
                                    <option value="">Todos los tipos de usuario</option>
                                    <option value="Estudiante" {{ request('user_type') == 'Estudiante' ? 'selected' : '' }}>Estudiante</option>
                                    <option value="Docente" {{ request('user_type') == 'Docente' ? 'selected' : '' }}>Docente</option>
                                    <option value="Administrativo" {{ request('user_type') == 'Administrativo' ? 'selected' : '' }}>Administrativo</option>
                                </select>
                            </div>

                            {{-- Filtrar por área --}}
                            <div class="col-md-3">
                                <select name="area" class="form-control">
                                    <option value="">Todas las áreas</option>
                                    @foreach ($loans->pluck('area')->unique() as $area)
                                        <option value="{{ $area }}" {{ request('area') == $area ? 'selected' : '' }}>
                                            {{ $area }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Filtrar por rol académico --}}
                            <div class="col-md-3">
                                <select name="academic_role" class="form-control">
                                    <option value="">Todos los roles académicos</option>
                                    @foreach ($loans->pluck('academic_role')->unique() as $role)
                                        <option value="{{ $role }}" {{ request('academic_role') == $role ? 'selected' : '' }}>
                                            {{ $role }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Botones --}}
                            <div class="col-12 mt-4 d-flex gap-2">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fas fa-filter"></i> Filtrar
                                </button>
                                <a href="{{ route('loans.index') }}" class="btn"
                                    style="background-color: #0B3D91; color:white;">
                                    <i class="fas fa-eraser"></i> Limpiar filtros
                                </a>
                            </div>
                        </div>
                    </form>
                </div>

                {{-- Tabla --}}
                <div class="table-responsive mt-3">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th><i class="fas fa-calendar-day"></i> Fecha de salida</th>
                                <th><i class="fas fa-calendar-check"></i> Fecha acordada</th>
                                <th><i class="fas fa-calendar-alt"></i> Fecha de entrega</th>
                                <th><i class="fas fa-sticky-note"></i> Observación de la entrega</th>
                                <th><i class="fas fa-sticky-note"></i> Observación de devolución</th>
                                <th><i class="fas fa-calendar-plus"></i> Fecha del préstamo</th>
                                <th><i class="fas fa-clock"></i> Duración del préstamo</th>
                                <th><i class="fas fa-user"></i> Nombre del usuario</th>
                                <th><i class="fas fa-users"></i> Tipo de usuario</th>
                                <th><i class="fas fa-building"></i> Área</th>
                                <th><i class="fas fa-user-graduate"></i> Rol académico</th>
                                <th><i class="fas fa-phone"></i> Número de contacto</th>
                                <th><i class="fas fa-map-marker-alt"></i> Dirección del usuario</th>
                                <th><i class="fas fa-desktop"></i> Nombre del Equipo</th>
                                <th><i class="fas fa-laptop-code"></i> Tipo de equipo tecnológico</th>
                                <th><i class="fas fa-barcode"></i> Identificación del dispositivo</th>
                                <th><i class="fas fa-microchip"></i> Modelo específico del equipo</th>
                                <th><i class="fas fa-screwdriver-wrench"></i> Condición de préstamo</th>
                                <th><i class="fas fa-user-tie"></i> Nombre del responsable</th>
                                <th><i class="fas fa-laptop"></i> Equipo Tecnológico</th>
                                <th><i class="fas fa-calendar-alt"></i> Fecha de Registro</th>
                                <th><i class="fas fa-cogs"></i> Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($loans as $loan)
                                <tr>
                                    <td>{{ $loan->departure_date }}</td>
                                    <td>{{ $loan->expected_date }}</td>
                                    <td>{{ $loan->delivery_date }}</td>
                                    <td>{{ $loan->delivery_observation }}</td>
                                    <td>{{ $loan->return_observation }}</td>
                                    <td>{{ $loan->loan_date }}</td>
                                    <td>{{ $loan->loan_duration }}</td>
                                    <td>{{ $loan->username }}</td>
                                    <td>{{ $loan->user_type }}</td>
                                    <td>{{ $loan->area }}</td>
                                    <td>{{ $loan->academic_role }}</td>
                                    <td>{{ $loan->contact_phone }}</td>
                                    <td>{{ $loan->user_address }}</td>
                                    <td>{{ $loan->equipment_name }}</td>
                                    <td>{{ $loan->equipment_type }}</td>
                                    <td>{{ $loan->brand }}</td>
                                    <td>{{ $loan->model }}</td>
                                    <td>{{ $loan->condition_loan }}</td>
                                    <td>{{ $loan->responsible->name }}</td>
                                    <td>{{ $loan->technological_equipment->equipment_name }}</td>
                                    <td>{{ $loan->created_at->format('d/m/Y') }}</td>
                                    <td style="white-space: nowrap; display: flex; align-items:center;">
                                        <a href="{{ route('loans.show', $loan) }}" class="btn btn-primary btn-sm me-1">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('loans.edit', $loan) }}" class="btn btn-info btn-sm me-1">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('loans.destroy', $loan->id) }}" method="POST"
                                            onsubmit="return confirm('¿Estás seguro que deseas eliminar este préstamo?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- Paginación --}}
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        {{ $loans->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
