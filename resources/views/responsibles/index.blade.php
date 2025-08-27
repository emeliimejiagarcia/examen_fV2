@extends('layouts.panel')
@section('title', 'Responsables')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0"> Responsables </h3>
                        <a href="{{ route('responsibles.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Responsable
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-user"></i> Nombre</th>
                                <th scope="col"><i class="fas fa-user"></i> Edad </th>
                                <th scope="col"><i class="fas fa-envelop"></i> Correo Electrónico</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Cédula</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Número Telefónico</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Departamento</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Género</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Nacionalidad</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Dirección</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Rol Academico</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Fecha de Registo</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($responsibles as $responsible)
                                <tr>

                                    <td>
                                        {{ $responsible->name }}
                                    </td>

                                    <td>
                                        {{ $responsible->age }}
                                    </td>

                                    <td>
                                        {{ $responsible->mail }}
                                    </td>

                                    <td>
                                        {{ $responsible->identity_card }}
                                    </td>

                                    <td>
                                        {{ $responsible->phone_number }}
                                    </td>

                                    <td>
                                        {{ $responsible->departament }}
                                    </td>

                                    <td>
                                        {{ $responsible->gender }}
                                    </td>

                                    <td>
                                        {{ $responsible->nationality }}
                                    </td>

                                    <td>
                                        {{ $responsible->address }}
                                    </td>

                                    <td>
                                        {{ $responsible->academic_role }}
                                    </td>

                                    <td>
                                        {{ $responsible->registration_date }}
                                    </td>




                                    <td style="white-space: nowrap; display: flex; align-items center;">
                                        <a href="{{ route('responsibles.show', $responsible->id) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('responsibles.edit', $responsible->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>

                                        <form action="{{ route('responsibles.destroy', $responsible->id) }}" method="POST"
                                            style="display: inline-block; margin:0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Estás seguro que deseea eliminar este responsable? Esta acción no se puede deshacer.');">
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
                        {{ $responsibles->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

