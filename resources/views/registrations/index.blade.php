@extends('layouts.panel')
@section('title', 'Registro')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0"> Registro </h3>
                        <a href="{{ route('registrations.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Registro
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-user"></i> Nombre de Usuario</th>
                                <th scope="col"><i class="fas fa-screwdriver-wrench"></i> Condición actual del equipo</th>
                                <th scope="col"><i class="fas fa-sync-alt"></i> Última actualización</th>
                                <th scope="col"><i class="fas fa-calendar-day"></i> Fecha y hora del registro</th>
                                <th scope="col"><i class="fas fa-calendar-plus"></i> Fecha del préstamo</th>
                                <th scope="col"><i class="fas fa-calendar-check"></i> Fecha de devolución</th>
                                <th scope="col"><i class="fas fa-clock"></i> Duración del préstamo</th>
                                <th scope="col"><i class="fas fa-users"></i> Tipo de Usuario</th>
                                <th scope="col"><i class="fas fa-desktop"></i> Nombre del equipo</th>
                                <th scope="col"><i class="fas fa-hashtag"></i> Número del equipo</th>
                                <th scope="col"><i class="fas fa-barcode"></i> Número de serie del equipo</th>
                                <th scope="col"><i class="fas fa-clipboard-check"></i> Condición del préstamo</th>
                                <th scope="col"><i class="fas fa-truck"></i> Nombre del proveedor</th>
                                <th scope="col"><i class="fas fa-calendar-plus"></i> Fecha del préstamo</th>
                                <th scope="col"><i class="fas fa-laptop"></i> Nombre del equipo tecnológico</th>
                                <th scope="col"><i class="fas fa-layer-group"></i> Tipo de equipo tecnológico</th>
                                <th scope="col"><i class="fas fa-calendar-alt"></i> Fecha de Registro</th>
                                <th scope="col"><i class="fas fa-cogs"></i> Acciones</th>                               
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($registrations as $registration)
                                <tr>

                                    <td>{{ $registration->username }}</td>
                                    <td>{{ $registration->current_condition }}</td>
                                    <td>{{ $registration->last_update }}</td>
                                    <td>{{ $registration->date_time}}
                                    <td>{{ $registration->loan_date}}
                                    <td>{{ $registration->return_date}}
                                    <td>{{ $registration->loan_duration}}
                                    <td>{{ $registration->user_type}}
                                    <td>{{ $registration->equipment_name}}
                                    <td>{{ $registration->equipment_number}}
                                    <td>{{ $registration->serial_number}}
                                    <td>{{ $registration->condition_loan}}
                                    <td>{{ $registration->vendor->name }}</td>
                                    <td>{{ $registration->loan->loan_date }}</td>
                                    <td>{{ $registration->technological_equipment->equipment_name}}</td>
                                    <td>{{ $registration->type_equipment->equipment_name}}</td>
                                    <td>{{ $registration->created_at->format('d/m/Y') }}</td>




                                    <td style="white-space: nowrap; display: flex; align-items center;">
                                        <a href="{{ route('registrations.show', $registration->id) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('registrations.edit', $registration->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>

                                        <form action="{{ route('registrations.destroy', $registration->id) }}" method="POST"
                                            style="display: inline-block; margin:0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Estás seguro que deseea eliminar este registro? Esta acción no se puede deshacer.');">
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
                        {{ $registrations->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
