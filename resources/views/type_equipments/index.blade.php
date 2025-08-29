@extends('layouts.panel')
@section('title', 'Tipos de Equipos Tecnológicos')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                {{-- HEADER --}}
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Tipos de Equipos Tecnológicos</h3>
                        <a href="{{ route('type_equipments.create') }}" class="btn"
                            style="background-color: #1a237e; color: white;">
                            <i class="fas fa-plus"></i> Nuevo tipo de equipo tecnológico
                        </a>

                    </div>

                    {{-- Formulario de búsqueda y filtros --}}
                    <form action="{{ route('type_equipments.index') }}" method="GET" class="mt-3">
                        <div class="row g-2 align-items-center">
                            {{-- Filtro por nombre --}}
                            <div class="col-md-4">
                                <input type="text" name="equipment_name" class="form-control"
                                    placeholder="Buscar por nombre..." value="{{ request('equipment_name') }}">
                            </div>

                            {{-- Filtro por código --}}
                            <div class="col-md-4">
                                <select name="code" class="form-control">
                                    <option value=""> Código del equipo tecnológico</option>
                                    @foreach ($type_equipments->pluck('code')->unique() as $code)
                                        <option value="{{ $code }}"
                                            {{ request('code') == $code ? 'selected' : '' }}>
                                            {{ $code }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Filtro por estado --}}
                            <div class="col-md-4">
                                <select name="type_status" class="form-control">
                                    <option value=""> Estados del equipo </option>
                                    @php
                                        $estados = [
                                            'Activo',
                                            'Inactivo',
                                            'En reparación',
                                            'En mantenimiento',
                                            'Obsoleto',
                                            'Descontinuado',
                                            'En uso',
                                            'En préstamo',
                                        ];
                                    @endphp
                                    @foreach ($estados as $estado)
                                        <option value="{{ $estado }}"
                                            {{ request('type_status') == $estado ? 'selected' : '' }}>
                                            {{ $estado }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Botones de acción --}}
                            <div class="col-12 mt-4 d-flex gap-2">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fas fa-filter"></i> Filtrar
                                </button>
                                <a href="{{ route('type_equipments.index') }}" class="btn"
                                    style="background-color: #1a237e; color: white;">
                                    Limpiar filtros
                                </a>

                            </div>
                        </div>
                    </form>


                    {{-- TABLA --}}
                    <div class="table-responsive mt-3">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nombre del equipo</th>
                                    <th>Descripción del equipo</th>
                                    <th>Fecha de préstamo</th>
                                    <th>Valor del equipo</th>
                                    <th>Consumo de energía</th>
                                    <th>Categoría del equipo</th>
                                    <th>Código del equipo</th>
                                    <th>Estado del equipo</th>
                                    <th>Equipo Tecnológico</th>
                                    <th>Fecha de creación</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($type_equipments as $type_equipment)
                                    <tr>
                                        <td>{{ $type_equipment->equipment_name }}</td>
                                        <td>{{ $type_equipment->description }}</td>
                                        <td>{{ $type_equipment->loan_time }}</td>
                                        <td>{{ $type_equipment->worth }}</td>
                                        <td>{{ $type_equipment->power_consumption }}</td>
                                        <td>{{ $type_equipment->technology_category }}</td>
                                        <td>{{ $type_equipment->code }}</td>
                                        <td>{{ $type_equipment->type_status }}</td>
                                        <td>{{ $type_equipment->technological_equipment->equipment_name ?? '' }}</td>
                                        <td>{{ $type_equipment->creation_date }}</td>

                                        <td style="white-space: nowrap; display: flex; align-items: center;">
                                            <a href="{{ route('type_equipments.show', $type_equipment->id) }}"
                                                class="btn btn-primary btn-sm me-1">
                                                <i class="fas fa-eye"></i> Mostrar
                                            </a>
                                            <a href="{{ route('type_equipments.edit', $type_equipment->id) }}"
                                                class="btn btn-info btn-sm me-1">
                                                <i class="fas fa-edit"></i> Editar
                                            </a>
                                            <form action="{{ route('type_equipments.destroy', $type_equipment->id) }}"
                                                method="POST" style="display: inline-flex; align-items: center;"
                                                onsubmit="return confirm('¿Estás seguro que deseas eliminar este tipo de equipo tecnológico? Esta acción no se puede deshacer.');">
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
                                        <td colspan="11" class="text-center text-muted">No se encontraron tipos de equipos
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- PAGINACIÓN --}}
                    <div class="card-footer py-4">
                        {{ $type_equipments->links() }}
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('styles')
        <style>
            .btn-morado {
                background-color: #6f42c1;
                color: #fff;
            }

            .btn-morado:hover {
                background-color: #5936a2;
                color: #fff;
            }

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
