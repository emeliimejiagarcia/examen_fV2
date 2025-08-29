@extends('layouts.panel')
@section('title', 'Vendor/Show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-truck"></i> Ver Proveedor</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('vendors.index') }}" class="btn btn-sm"
                            style="background-color: #001f3f; color: white;">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>

                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4"> Información del Proveedor</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="name">
                                    <i class="fas fa-user-tie"></i> Nombre Completo
                                </label>
                                <p>{{ $vendors->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="point_contact">
                                    <i class="fas fa-id-badge"></i> Contacto Principal
                                </label>
                                <p>{{ $vendors->point_contact }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="phone_number">
                                    <i class="fas fa-phone"></i> Número Telefónico
                                </label>
                                <p>{{ $vendors->phone_number }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="mail">
                                    <i class="fas fa-envelope"></i> Correo Electrónico
                                </label>
                                <p>{{ $vendors->mail }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="delivered_products">
                                    <i class="fas fa-box-open"></i> Productos Entregados
                                </label>
                                <p>{{ $vendors->delivered_products }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="warranty">
                                    <i class="fas fa-shield-alt"></i> Garantía
                                </label>
                                <p>{{ $vendors->warranty }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="address">
                                    <i class="fas fa-map-marker-alt"></i> Dirección
                                </label>
                                <p>{{ $vendors->address }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="department">
                                    <i class="fas fa-building"></i> Departamento
                                </label>
                                <p>{{ $vendors->department }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="age">
                                    <i class="fas fa-birthday-cake"></i> Edad
                                </label>
                                <p>{{ $vendors->age }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="identity_card">
                                    <i class="fas fa-id-card"></i> Cédula
                                </label>
                                <p>{{ $vendors->identity_card }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="authorization_file">
                                    <i class="fas fa-file-contract"></i> Autorización para Proveer
                                </label>

                                @if ($vendors->authorization_file)
                                    <a href="{{ Storage::url($vendors->authorization_file) }}" target="_blank">Ver
                                        autorización</a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calendar-check"></i> Fecha de Matrícula
                                </label>
                                <p>{{ $vendors->created_at->format('d-m-Y') }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
