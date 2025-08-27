@extends('layouts.panel')
@section('title', 'Área Académica')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Área académica </h3>
                        <a href="{{ route('academic_areas.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Área académica
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-ol"></i> Nombre de la área</th>
                                <th scope="col"><i class="fas fa-user"></i> Código del área académica</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Ubicación</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Coordinador de Equipos</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Tipo de Área</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Descripción del área</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Cantidad de equipos</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Nombre del Responsable</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Nombre del Equipo tecnológico</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Acciones </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($academic_areas as $academic_area)
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

                                    <td style="white-space: nowrap; display: flex; align-items center;">
                                        <a href="{{ route('academic_areas.show', $academic_area->id) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('academic_areas.edit', $academic_area->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>

                                        <form action="{{ route('academic_areas.destroy', $academic_area->id) }}" method="POST"
                                            style="display: inline-block; margin:0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Estás seguro que deseea eliminar esta área académica? Esta acción no se puede deshacer.');">
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
                        {{ $academic_areas->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
