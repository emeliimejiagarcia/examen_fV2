@extends('layouts.panel')
@section('title', 'Área Académica')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                {{-- HEADER --}}
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Área académica </h3>
                        <a href="{{ route('academic_areas.create') }}" class="btn"
                            style="background-color: #1a237e; color: #fff;">
                            <i class="fas fa-plus"></i> Nueva área académica
                        </a>

                    </div>

                    {{-- Formulario de filtros --}}
                    <form action="{{ route('academic_areas.index') }}" method="GET" class="mt-3">
                        <div class="row g-2 align-items-center">

                            {{-- Filtro por nombre --}}
                            <div class="col-md-4">
                                <input type="text" name="area_name" class="form-control"
                                    placeholder="Buscar por nombre del área..." value="{{ request('area_name') }}">
                            </div>

                            {{-- Filtro por coordinador --}}
                            <div class="col-md-4">
                                <select name="equipment_coordinator" class="form-control">
                                    <option value="">Todos los coordinadores</option>
                                    @foreach ($academic_areas->pluck('equipment_coordinator')->unique() as $coordinator)
                                        <option value="{{ $coordinator }}"
                                            {{ request('equipment_coordinator') == $coordinator ? 'selected' : '' }}>
                                            {{ $coordinator }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Filtro por ubicación --}}
                            <div class="col-md-4">
                                <select name="location" class="form-control">
                                    <option value="">Todas las ubicaciones</option>
                                    @foreach ($academic_areas->pluck('location')->unique() as $location)
                                        <option value="{{ $location }}"
                                            {{ request('location') == $location ? 'selected' : '' }}>
                                            {{ $location }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Botones --}}
                            <div class="col-md-12 mt-4 d-flex gap-2">
                                <button class="btn btn-secondary" type="submit"><i class="fas fa-filter"></i>
                                    Filtrar </button>
                                <a href="{{ route('loans.index') }}" class="btn"
                                    style="background-color: #0B3D91; color:white;">
                                    <i class="fas fa-eraser"></i> Limpiar filtros
                                </a>
                            </div>
                        </div>
                    </form>

                    {{-- TABLA --}}
                    <div class="table-responsive mt-3">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nombre del área</th>
                                    <th>Código del área académica</th>
                                    <th>Ubicación</th>
                                    <th>Coordinador de Equipos</th>
                                    <th>Tipo de Área</th>
                                    <th>Descripción del área</th>
                                    <th>Cantidad de equipos</th>
                                    <th>Nombre del Responsable</th>
                                    <th>Nombre del Equipo tecnológico</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($academic_areas as $academic_area)
                                    <tr>
                                        <td>{{ $academic_area->area_name }}</td>
                                        <td>{{ $academic_area->area_code }}</td>
                                        <td>{{ $academic_area->location }}</td>
                                        <td>{{ $academic_area->equipment_coordinator }}</td>
                                        <td>{{ $academic_area->area_type }}</td>
                                        <td>{{ $academic_area->description }}</td>
                                        <td>{{ $academic_area->equipment_quantity }}</td>
                                        <td>{{ $academic_area->responsible->name }}</td>
                                        <td>{{ $academic_area->technological_equipment->equipment_name }}</td>

                                        <td style="white-space: nowrap; display: flex; align-items: center;">
                                            <a href="{{ route('academic_areas.show', $academic_area->id) }}"
                                                class="btn btn-primary btn-sm me-1">
                                                <i class="fas fa-eye"></i> Mostrar
                                            </a>
                                            <a href="{{ route('academic_areas.edit', $academic_area->id) }}"
                                                class="btn btn-info btn-sm me-1">
                                                <i class="fas fa-edit"></i> Editar
                                            </a>
                                            <form action="{{ route('academic_areas.destroy', $academic_area->id) }}"
                                                method="POST" style="display: inline-flex; align-items: center;"
                                                onsubmit="return confirm('¿Estás seguro que deseas eliminar a este proveedor? Esta acción no se puede deshacer.');">
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
                                        <td colspan="10" class="text-center text-muted">No se encontraron áreas académicas
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- PAGINACIÓN --}}
                    <div class="card-footer py-4">
                        {{ $academic_areas->links() }}
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

            /* Select y input con bordes grises */
            .form-control {
                border-radius: 0.375rem;
                border: 1px solid #ced4da;
                height: calc(2.25rem + 2px);
                padding: 0.375rem 0.75rem;
            }
        </style>
    @endpush
