@extends('layouts.panel')
@section('title', 'Responsables')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                {{-- HEADER --}}
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0"> Responsables </h3>
                        <a href="{{ route('responsibles.create') }}" class="btn"
                            style="background-color: #1a237e; color: #fff;">
                            <i class="fas fa-plus"></i> Nuevo responsable
                        </a>

                    </div>

                    {{-- Formulario de búsqueda y filtros --}}
                    <form action="{{ route('responsibles.index') }}" method="GET" class="mt-3">
                        <div class="row g-2 align-items-center">
                            {{-- Buscador de texto --}}
                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control"
                                    placeholder="Buscar por nombre, correo o cédula..." value="{{ request('search') }}">
                            </div>

                            {{-- Select departamento --}}
                            <div class="col-md-4">
                                <select name="departament" class="form-control">
                                    <option value=""> Todos los departamentos </option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department }}"
                                            {{ request('departament') == $department ? 'selected' : '' }}>
                                            {{ $department }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Select rol académico --}}
                            <div class="col-md-4">
                                <select name="academic_role" class="form-control">
                                    <option value=""> Todos los roles académicos </option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role }}"
                                            {{ request('academic_role') == $role ? 'selected' : '' }}>
                                            {{ $role }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Botones de acción --}}
                        <div class="mt-4 mb-3 d-flex gap-2">
                            <button class="btn btn-secondary" type="submit">
                                <i class="fas fa-filter"></i> Filtrar
                            </button>
                            <a href="{{ route('technological_equipments.index') }}" class="btn"
                                style="background-color: #1a237e; color: #fff;">
                                Limpiar filtros
                            </a>

                        </div>
                    </form>
                </div>

                {{-- TABLA --}}
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Nombre</th>
                                <th>Edad</th>
                                <th>Correo Electrónico</th>
                                <th>Cédula</th>
                                <th>Número Telefónico</th>
                                <th>Departamento</th>
                                <th>Género</th>
                                <th>Nacionalidad</th>
                                <th>Dirección</th>
                                <th>Rol Académico</th>
                                <th>Fecha de Registro</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($responsibles as $responsible)
                                <tr>
                                    <td>{{ $responsible->name }}</td>
                                    <td>{{ $responsible->age }}</td>
                                    <td>{{ $responsible->mail }}</td>
                                    <td>{{ $responsible->identity_card }}</td>
                                    <td>{{ $responsible->phone_number }}</td>
                                    <td>{{ $responsible->departament }}</td>
                                    <td>{{ $responsible->gender }}</td>
                                    <td>{{ $responsible->nationality }}</td>
                                    <td>{{ $responsible->address }}</td>
                                    <td>{{ $responsible->academic_role }}</td>
                                    <td>{{ $responsible->registration_date }}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('responsibles.show', $responsible->id) }}"
                                            class="btn btn-primary btn-sm me-1">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('responsibles.edit', $responsible->id) }}"
                                            class="btn btn-info btn-sm me-1">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('responsibles.destroy', $responsible->id) }}" method="POST"
                                            style="display: inline-flex; align-items: center;"
                                            onsubmit="return confirm('¿Estás seguro que deseas eliminar este responsable? Esta acción no se puede deshacer.');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12" class="text-center text-muted">No se encontraron responsables</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- PAGINACIÓN --}}
                <div class="card-footer py-4">
                    {{ $responsibles->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        /* Botón morado */
        .btn-morado {
            background-color: #6f42c1;
            color: #fff;
        }

        .btn-morado:hover {
            background-color: #5936a2;
            color: #fff;
        }

        /* Select con bordes grises y mismo tamaño */
        .form-control {
            border-radius: 0.375rem;
            border: 1px solid #ced4da;
            height: calc(2.25rem + 2px);
            padding: 0.375rem 0.75rem;
        }

        .form-control option {
            color: #000;
        }
    </style>
@endpush
