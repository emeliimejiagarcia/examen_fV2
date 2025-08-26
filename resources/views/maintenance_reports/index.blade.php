@extends('layouts.panel')
@section('title', 'Informes de Mantenimiento')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0"> Informes de Mantenimiento </h3>
                        <a href="{{ route('maintenance_reports.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Informe de Mantenimiento
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-ol"></i> Fecha del informe </th>
                                <th scope="col"><i class="fas fa-user"></i>Descripción</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Acción realizada</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Condición del equipo</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Nombre del equipo</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Fecha del mantenimiento</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Tipo de mantenimiento</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Nombre del técnico</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Costo del mantenimiento</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Estado del informe</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Responsable</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Equipo Tecnológico</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Acciones </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($maintenance_reports as $maintenance_report)
                                <tr>

                                    <td>{{ $maintenance_report->report_date }}</td>
                                    <td>{{ $maintenance_report->description }}</td>
                                    <td>{{ $maintenance_report->action }}</td>
                                    <td>{{ $maintenance_report->equipment_condition }}</td>
                                    <td>{{ $maintenance_report->equipment_name }}</td>
                                    <td>{{ $maintenance_report->maintenance_date }}</td>
                                    <td>{{ $maintenance_report->maintenance_type }}</td>
                                    <td>{{ $maintenance_report->technician_name }}</td>
                                    <td>{{ $maintenance_report->maintenance_cost }}</td>
                                    <td>{{ $maintenance_report->report_status }}</td>
                                    <td>{{ $maintenance_report->responsible->name }}</td>
                                    <td>{{ $maintenance_report->technological_equipment->equipment_name }}</td>

                                    <td style="white-space: nowrap; display: flex; align-items center;">
                                        <a href="{{ route('maintenance_reports.show', $maintenance_report->id) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('maintenance_reports.edit', $maintenance_report->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>

                                        <form action="{{ route('maintenance_reports.destroy', $maintenance_report->id) }}" method="POST"
                                            style="display: inline-block; margin:0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Estás seguro que deseea eliminar este informe de mantenimiento? Esta acción no se puede deshacer.');">
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
                        {{ $maintenance_reports->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
