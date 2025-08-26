@extends('layouts.panel')
@section('title', 'Préstamos')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0"> Matrículas </h3>
                        <a href="{{ route('loans.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Matrícula
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-ol"></i> Fecha de salida </th>
                                <th scope="col"><i class="fas fa-user"></i>Fecha acordada </th>
                                <th scope="col"><i class="fas fa-envelop"></i>Fecha de entrega </th>
                                <th scope="col"><i class="fas fa-envelop"></i> Observación de la entrega </th>
                                <th scope="col"><i class="fas fa-envelop"></i> Observación de devolución</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Fecha del préstamo </th>
                                <th scope="col"><i class="fas fa-envelop"></i> Duración del préstamo</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Nombre del usuario</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Tipo de usuario</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Área</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Rol académico</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Número de contacto</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Dirección del usuario</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Nombre del Equipo</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Tipo de equipo tecnológico</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Identificación del dispositivo</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Modelo específico del equipo</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Condición de préstamo</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Nombre del responsable</th>
                                <th scope="col"><i class="fas fa-envelop"></i>Equipo Tecnológico</th>
                                 <th scope="col"><i class="fas fa-envelop"></i>Acciones</th>


                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($loans as $loan)
                                <tr>

                                    <td>{{ $loans->departure_date }}</td>
                                    <td>{{ $loans->expected_date }}</td>
                                    <td>{{ $loans->delivery_date }}</td>
                                    <td>{{ $loans->delivery_observation }}</td>
                                    <td>{{ $loans->return_observation }}</td>
                                    <td>{{ $loans->loan_date }}</td>
                                    <td>{{ $loans->loan_duration }}</td>
                                    <td>{{ $loans->username }}</td>
                                    <td>{{ $loans->user_type }}</td>
                                    <td>{{ $loans->area }}</td>
                                    <td>{{ $loans->academic_role }}</td>
                                    <td>{{ $loans->contact_phone }}</td>
                                    <td>{{ $loans->user_address }}</td>
                                    <td>{{ $loans->equipment_name }}</td>
                                    <td>{{ $loans->equipment_type }}</td>
                                    <td>{{ $loans->brand }}</td>
                                    <td>{{ $loans->model }}</td>
                                    <td>{{ $loans->condition_loan }}</td>
                                    <td>{{ $loans->responsible->name }}</td>
                                    <td>{{ $loans->technological_equipment->equipment_name }}</td>




                                    <td style="white-space: nowrap; display: flex; align-items center;">
                                        <a href="{{ route('loans.show', $loans) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('loans.edit', $loans) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>

                                        <form action="{{ route('loans.destroy', $loans->id) }}" method="POST"
                                            style="display: inline-block; margin:0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Estás seguro que deseea eliminar este préstamo? Esta acción no se puede deshacer.');">
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
                        {{ $loans->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
