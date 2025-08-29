@extends('layouts.panel')
@section('title', 'Equipos Tecnológicos')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                {{-- HEADER --}}
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Equipos Tecnológicos</h3>
                        <a href="{{ route('technological_equipments.create') }}" class="btn"
                            style="background-color: #1a237e; color: white;">
                            <i class="fas fa-plus"></i> Nuevo equipo tecnológico
                        </a>

                    </div>

                    {{-- Formulario de búsqueda y filtro por proveedor --}}
                    <form action="{{ route('technological_equipments.index') }}" method="GET" class="mt-3">
                        <div class="row g-2">
                            {{-- Buscador de texto --}}
                            <div class="col-md-6">
                                <input type="text" name="search" class="form-control"
                                    placeholder="Buscar por nombre, serie, marca o código..."
                                    value="{{ request('search') }}">
                            </div>

                            {{-- Select proveedor --}}
                            <div class="col-md-6">
                                <select name="vendor_id" class="form-control">
                                    <option value=""> Todos los proveedores </option>
                                    @foreach ($vendors as $vendor)
                                        <option value="{{ $vendor->id }}"
                                            {{ request('vendor_id') == $vendor->id ? 'selected' : '' }}>
                                            {{ $vendor->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-secondary" type="submit"><i class="fas fa-filter"></i> Filtrar</button>
                            <a href="{{ route('technological_equipments.index') }}" class="btn"
                                style="background-color: #1a237e; color: white;">
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
                                <th>Marca física</th>
                                <th>Nombre del equipo</th>
                                <th>Número de serie</th>
                                <th>Condición del equipo</th>
                                <th>Ubicación física</th>
                                <th>Fecha de ingreso</th>
                                <th>Marca comercial</th>
                                <th>Fecha de adquisición</th>
                                <th>Disponibilidad</th>
                                <th>Código de inventario</th>
                                <th>Proveedor</th>
                                <th>Fecha de Registro</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($technological_equipments as $technological_equipment)
                                <tr>
                                    <td>{{ $technological_equipment->mark }}</td>
                                    <td>{{ $technological_equipment->equipment_name }}</td>
                                    <td>{{ $technological_equipment->serial_number }}</td>
                                    <td>{{ $technological_equipment->condition }}</td>
                                    <td>{{ $technological_equipment->location }}</td>
                                    <td>{{ $technological_equipment->entry_date }}</td>
                                    <td>{{ $technological_equipment->brand }}</td>
                                    <td>{{ $technological_equipment->acquisition_date }}</td>
                                    <td>{{ $technological_equipment->availability }}</td>
                                    <td>{{ $technological_equipment->inventory_code }}</td>
                                    <td>{{ $technological_equipment->vendor->name }}</td>
                                    <td>{{ $technological_equipment->created_at->format('d/m/Y') }}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('technological_equipments.show', $technological_equipment->id) }}"
                                            class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('technological_equipments.edit', $technological_equipment->id) }}"
                                            class="btn btn-info btn-sm" style="margin-right: 5px;">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form
                                            action="{{ route('technological_equipments.destroy', $technological_equipment->id) }}"
                                            method="POST" style="display: inline-flex; align-items: center;"
                                            onsubmit="return confirm('¿Estás seguro que deseas eliminar este equipo tecnológico? Esta acción no se puede deshacer.');">
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
                                    <td colspan="13" class="text-center text-muted">No se encontraron equipos tecnológicos
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- PAGINACIÓN --}}
                <div class="card-footer py-4">
                    <nav aria-label="..." class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                        {{ $technological_equipments->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
