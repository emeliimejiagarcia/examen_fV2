@extends('layouts.panel')
@section('title', 'Proveedor')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Proveedores</h3>
                        <a href="{{ route('vendors.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Proveedor
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-ol"></i> Nombre</th>
                                <th scope="col"><i class="fas fa-user"></i> Nombre del punto de contacto</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Número Telefónico</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Correo Electrónico</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Productos Entregados</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Garantía</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Dirección</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Departamento</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Edad</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Cédula de Identidad</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Autorizacón de Proveedor</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Fecha de Registo</th>
                                <th scope="col"><i class="fas fa-envelop"></i> Acciones</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($vendors as $vendor)
                                <tr>

                                    <td>
                                        {{ $vendor->name }}
                                    </td>

                                    <td>
                                        {{ $vendor->point_contact }}
                                    </td>

                                    <td>
                                        {{ $vendor->phone_number }}
                                    </td>

                                    <td>
                                        {{ $vendor->mail }}
                                    </td>

                                    <td>
                                        {{ $vendor->delivered_products }}
                                    </td>

                                    <td>
                                        {{ $vendor->warranty }}
                                    </td>

                                    <td>
                                        {{ $vendor->address }}
                                    </td>

                                    <td>
                                        {{ $vendor->department }}
                                    </td>

                                    <td>
                                        {{ $vendor->age }}
                                    </td>

                                    <td>
                                        {{ $vendor->identity_card }}
                                    </td>

                                    <td>
                                        {{ $vendor->authorization_provide }}
                                    </td>

                                    <td>
                                        {{ $vendor->created_at->format('d/m/Y') }}
                                    </td>





                                    <td style="white-space: nowrap; display: flex; align-items center;">
                                        <a href="{{ route('vendors.show', $vendor->id) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('vendors.edit', $vendor->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>

                                        <form action="{{ route('vendors.destroy', $vendor->id) }}" method="POST"
                                            style="display: inline-block; margin:0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Estás seguro que deseea eliminar este proveedor? Esta acción no se puede deshacer.');">
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
                        {{ $vendors->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

