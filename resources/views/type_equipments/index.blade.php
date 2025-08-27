@extends('layouts.panel')
@section('title', 'Tipos de Equipos Tecnológicos')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0"> Tipo de Equipos tecnológicos </h3>
                        <a href="{{ route('type_equipments.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Tipo de Equipo Tecnológico
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-ol"></i> Nombre del equipo </th>
                                <th scope="col"><i class="fas fa-user"></i> Descripción del equipo </th>
                                <th scope="col"><i class="fas fa-envelop"></i> Fecha de préstamo</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Valor del equipo</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Consumo de energía </th>
                                <th scope="col"><i class="fas fa-envelop"></i> Categoría del equipo </th>
                                <th scope="col"><i class="fas fa-user"></i> Código del equipo  </th>
                                <th scope="col"><i class="fas fa-user"></i> Estado del equipo </th>
                                <th scope="col"><i class="fas fa-user"></i> Equipo Tecnológico </th>
                                <th scope="col"><i class="fas fa-user"></i> Fecha de creación </th>
                                <th scope="col"><i class="fas fa-envelop"></i> Acciones </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($type_equipments as $type_equipment)
                                <tr>

                                    <td>{{ $type_equipment->equipment_name }}</td>
                                    <td>{{ $type_equipment->description }}</td>
                                    <td>{{ $type_equipment->loan_time }}</td>
                                    <td>{{ $type_equipment->worth }}</td>
                                    <td>{{ $type_equipment->power_consumption }}</td>
                                    <td>{{ $type_equipment->technology_category }}</td>
                                    <td>{{ $type_equipment->code }}</td>
                                    <td>{{ $type_equipment->type_status }}</td>
                                    <td>{{ $type_equipment->technological_equipment->equipment_name }}</td>
                                    <td>{{ $type_equipment->creation_date }}</td>




                                    <td style="white-space: nowrap; display: flex; align-items center;">
                                        <a href="{{ route('type_equipments.show', $type_equipment->id) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('type_equipments.edit', $type_equipment->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>

                                        <form action="{{ route('type_equipments.destroy', $type_equipment->id) }}" method="POST"
                                            style="display: inline-block; margin:0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Estás seguro que deseea eliminar tipo de equipo? Esta acción no se puede deshacer.');">
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
                        {{ $type_equipments->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
