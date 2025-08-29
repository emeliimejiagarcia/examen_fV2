@extends('layouts.panel')
@section('title', 'Proveedores')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                {{-- HEADER --}}
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Proveedores</h3>
                        <a href="{{ route('vendors.create') }}" class="btn" style="background-color: #1a237e; color: #fff;">
                            <i class="fas fa-plus"></i> Nuevo proveedor
                        </a>

                    </div>

                    {{-- Formulario de búsqueda y filtros --}}
                    <form action="{{ route('vendors.index') }}" method="GET" class="mt-3">
                        <div class="row g-2 align-items-center">
                            {{-- Buscador por nombre, correo o cédula --}}
                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control"
                                    placeholder="Buscar por nombre, correo o cédula..." value="{{ request('search') }}">
                            </div>

                            {{-- Select para filtrar por dirección del proveedor --}}
                            <div class="col-md-4">
                                <select name="address" class="form-control">
                                    <option value="">Todas las direcciones</option>
                                    @foreach ($vendors as $vendor)
                                        <option value="{{ $vendor->address }}"
                                            {{ request('address') == $vendor->address ? 'selected' : '' }}>
                                            {{ $vendor->address }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Select departamento --}}
                            <div class="col-md-4">
                                <select name="department" class="form-control">
                                    <option value="">Todos los departamentos</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department }}"
                                            {{ request('department') == $department ? 'selected' : '' }}>
                                            {{ $department }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Botones de acción debajo de los filtros --}}
                        {{-- Botones de acción debajo de los filtros --}}
                        <div class="mt-4 d-flex gap-2">
                            <button class="btn btn-secondary" type="submit"><i class="fas fa-filter"></i> Filtrar</button>
                            <a href="{{ route('vendors.index') }}" class="btn"
                                style="background-color: #1a237e; color: #fff;">
                                Limpiar filtros
                            </a>

                        </div>
                    </form>
                </div>

                {{-- TABLA --}}
                <div class="table-responsive mt-3">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Nombre</th>
                                <th>Punto de contacto</th>
                                <th>Número Telefónico</th>
                                <th>Correo Electrónico</th>
                                <th>Productos Entregados</th>
                                <th>Garantía</th>
                                <th>Dirección</th>
                                <th>Departamento</th>
                                <th>Edad</th>
                                <th>Cédula de Identidad</th>
                                <th>Autorización de Proveedor</th>
                                <th>Fecha de Registro</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($vendors as $vendor)
                                <tr>
                                    <td>{{ $vendor->name }}</td>
                                    <td>{{ $vendor->point_contact }}</td>
                                    <td>{{ $vendor->phone_number }}</td>
                                    <td>{{ $vendor->mail }}</td>
                                    <td>{{ $vendor->delivered_products }}</td>
                                    <td>{{ $vendor->warranty }}</td>
                                    <td>{{ $vendor->address }}</td>
                                    <td>{{ $vendor->department }}</td>
                                    <td>{{ $vendor->age }}</td>
                                    <td>{{ $vendor->identity_card }}</td>
                                    <td><img src="{{ $vendor->image() }}" width="150" height="100"></td>
                                    <td>{{ $vendor->created_at->format('d/m/Y') }}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('vendors.show', $vendor->id) }}"
                                            class="btn btn-primary btn-sm me-1">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('vendors.edit', $vendor->id) }}"
                                            class="btn btn-info btn-sm me-1">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('vendors.destroy', $vendor->id) }}" method="POST"
                                            style="display: inline-flex; align-items: center;"
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
                                    <td colspan="13" class="text-center text-muted">No se encontraron proveedores</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- PAGINACIÓN --}}
                <div class="card-footer py-4">
                    {{ $vendors->links() }}
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

        /* Select con bordes grises */
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
