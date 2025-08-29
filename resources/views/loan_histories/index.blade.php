@extends('layouts.panel')
@section('title', 'Historial de Préstamos')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0"> Historial del Préstamos </h3>
                        <a href="{{ route('loan_histories.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo historial de préstamos
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-user"></i> Nombre de usuario</th>
                                <th scope="col"><i class="fas fa-laptop"></i> Nombre del equipo tecnológico</th>
                                <th scope="col"><i class="fas fa-layer-group"></i> Tipo de equipo tecnológico</th>
                                <th scope="col"><i class="fas fa-calendar-day"></i> Fecha del préstamo</th>
                                <th scope="col"><i class="fas fa-door-open"></i> Estado de entrada</th>
                                <th scope="col"><i class="fas fa-door-closed"></i> Estado de salida</th>
                                <th scope="col"><i class="fas fa-screwdriver-wrench"></i> Condición del equipo tecnológico</th>
                                <th scope="col"><i class="fas fa-barcode"></i> Código de préstamo</th>
                                <th scope="col"><i class="fas fa-sticky-note"></i> Descripción del préstamo</th>
                                <th scope="col"><i class="fas fa-user"></i> Nombre de usuario del prestatario</th>
                                <th scope="col"><i class="fas fa-calendar-alt"></i> Fecha del préstamo</th>
                                <th scope="col"><i class="fas fa-cogs"></i> Acciones</th>                               
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($loan_histories as $loan_history)
                                <tr>

                                    <td>{{ $loan_history->username }}</td>
                                    <td>{{ $loan_history->equipment_name }}</td>
                                    <td>{{ $loan_history->type_equipment }}</td>
                                    <td>{{ $loan_history->loan_date }}</td>
                                    <td>{{ $loan_history->input_status }}</td>
                                    <td>{{ $loan_history->exit_status }}</td>
                                    <td>{{ $loan_history->condition }}</td>
                                    <td>{{ $loan_history->loan_code }}</td>
                                    <td>{{ $loan_history->description }}</td>
                                    <td>{{ $loan_history->loan->username }}</td>
                                    <td>{{ $loan_history->created_at->format('d/m/Y') }}</td>





                                    <td style="white-space: nowrap; display: flex; align-items center;">
                                        <a href="{{ route('loan_histories.show', $loan_history) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('loan_histories.edit', $loan_history) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>

                                        <form action="{{ route('loan_histories.destroy', $loan_history->id) }}" method="POST"
                                            style="display: inline-block; margin:0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Estás seguro que deseea eliminar este historial de préstamos? Esta acción no se puede deshacer.');">
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
                        {{ $loan_histories->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
