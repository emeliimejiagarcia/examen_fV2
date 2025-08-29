@extends('layouts.panel')
@section('title', 'Equipo Tecnológico/Show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-desktop"></i> Ver equipo tecnológico </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('technological_equipments.index') }}" class="btn btn-sm"
                           style="background-color: #001f3f; color: white;">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4"> Registro de Equipos Tecnológicos</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="mark">
                                    <i class="fas fa-tag"></i> Marca física
                                </label>
                                <p>{{ $technological_equipments->mark }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="equipment_name">
                                    <i class="fas fa-laptop"></i> Nombre del equipo
                                </label>
                                <p>{{ $technological_equipments->equipment_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="serial_number">
                                    <i class="fas fa-barcode"></i> Número de serie
                                </label>
                                <p>{{ $technological_equipments->serial_number }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="condition">
                                    <i class="fas fa-stethoscope"></i> Condición del equipo
                                </label>
                                <p>{{ $technological_equipments->condition }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="location">
                                    <i class="fas fa-map-marker-alt"></i> Ubicación física
                                </label>
                                <p>{{ $technological_equipments->location }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="entry_date">
                                    <i class="fas fa-calendar-plus"></i> Fecha de ingreso
                                </label>
                                <p>{{ $technological_equipments->entry_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="brand">
                                    <i class="fas fa-industry"></i> Marca comercial
                                </label>
                                <p>{{ $technological_equipments->brand }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="acquisition_date">
                                    <i class="fas fa-calendar-alt"></i> Fecha de adquisición
                                </label>
                                <p>{{ $technological_equipments->acquisition_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="availability">
                                    <i class="fas fa-check-circle"></i> Disponibilidad
                                </label>
                                <p>{{ $technological_equipments->availability }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="inventory_code">
                                    <i class="fas fa-folder-open"></i> Código de inventario
                                </label>
                                <p>{{ $technological_equipments->inventory_code }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="technology_category">
                                    <i class="fas fa-th-large"></i> Categoría tecnológica
                                </label>
                                <p>{{ $technological_equipments->technology_category }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="vendor_id"class="form-control-label">
                                    <i class="fas fa-truck"></i> Proveedor
                                </label>
                                <p>{{ $technological_equipments->vendor->name }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calendar-check"></i> Fecha de Registro
                                </label>
                                <p>{{ $technological_equipments->created_at->format('d-m-Y') }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
