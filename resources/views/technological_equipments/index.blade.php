@extends('layouts.panel')
@section('title', 'Equipos Tecnológicos')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0"> Asignaturas </h3>
                        <a href="{{ route('technological_equipments.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo equipo tecnológico
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-ol"></i> Marca física </th>
                                <th scope="col"><i class="fas fa-user"></i> Nombre del equipo</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Número de serie </th>
                                <th scope="col"><i class="fas fa-envelop"></i> Condición del equipo</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Ubicación física</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Fecha de ingreso</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Marca comercial</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Fecha de adquisición</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Disponibilidad </th>
                                <th scope="col"><i class="fas fa-envelop"></i> Código de inventario </th>
                                <th scope="col"><i class="fas fa-envelop"></i> Categoría tecnológica </th>
                                <th scope="col"><i class="fas fa-envelop"></i> Proveedor </th>

                                <th scope="col"><i class="fas fa-envelop"></i> Acciones </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($technological_equipments as $technological_equipment)
                                <tr>

                                    <td>{{ $technological_equipment->mark }}</td>
                                    <td>{{ $technological_equipment->equipment_name }}</td>
                                    <td>{{ $technological_equipment->serial_number }}</td>
                                    <td>{{ $technological_equipment->condition }}</td>
                                    <td>{{ $technological_equipment->location }}</td>
                                    <td>{{ $technological_equipment->entry_date }}</td>
                                    <td>{{ $technological_equipment->brand }}</td>
                                    <td>{{ $technological_equipment->acquisition_date }}</td>
                                    <td>{{ $technological_equipment->availability}}</td>
                                    <td>{{ $technological_equipment->inventory_code }}</td>
                                    <td>{{ $technological_equipment->technology_category}}</td>
                                    <td>{{ $technological_equipment->vendor->name }}</td>

                                    <td style="white-space: nowrap; display: flex; align-items center;">
                                        <a href="{{ route('technological_equipments.show', $technological_equipment->id) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('technological_equipments.edit', $technological_equipment->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>

                                        <form action="{{ route('technological_equipments.destroy', $technological_equipment->id) }}" method="POST"
                                            style="display: inline-block; margin:0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Estás seguro que deseea eliminar este equipo tecnológico? Esta acción no se puede deshacer.');">
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

                <div class="card-footer py-4">
                    <nav arial-label="..." class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                        {{ $technological_equipments->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
