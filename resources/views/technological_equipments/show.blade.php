@extends('layouts.panel')
@section('title', 'Equipo Tecnológico/Show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">

                    <h3 class="mb-0"><i class="fas fa_newspaper"></i> Ver equipo tecnológico </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('technological_equipments.index') }}" class= "btn btn-sm btn-primary">
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
                                    <i class="fas fa-user"></i> Marca física
                                </label>
                                <p>{{ $technological_equipments->mark }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="equipment_name">
                                    <i class="fas fa-user"></i> Nombre del equipo
                                </label>
                                <p>{{ $technological_equipments->equipment_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="serial_number">
                                    <i class="fas fa-user"></i> Número de serie
                                </label>
                                <p>{{ $technological_equipments->serial_number }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="condition">
                                    <i class="fas fa-user"></i> Condición del equipo
                                </label>
                                <p>{{ $technological_equipments->condition }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="location">
                                    <i class="fas fa-user"></i> Ubicación física
                                </label>
                                <p>{{ $technological_equipments->location }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="entry_date">
                                    <i class="fas fa-user"></i> Fecha de ingreso
                                </label>
                                <p>{{ $technological_equipments->entry_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="brand">
                                    <i class="fas fa-user"></i> Marca comercial
                                </label>
                                <p>{{ $technological_equipments->brand }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="acquisition_date">
                                    <i class="fas fa-user"></i> Fecha de adquisición
                                </label>
                                <p>{{ $technological_equipments->acquisition_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="availability">
                                    <i class="fas fa-user"></i> Disponibilidad
                                </label>
                                <p>{{ $technological_equipments->availability }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="inventory_code">
                                    <i class="fas fa-user"></i> Código de inventario
                                </label>
                                <p>{{ $technological_equipments->inventory_code }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="technology_category">
                                    <i class="fas fa-user"></i> Categoría tecnológica
                                </label>
                                <p>{{ $technological_equipments->technology_category }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="vendor_id"class="form-control-label">
                                    <i class="fas fa-user"></i> Proveedor
                                </label>
                                <p>{{ $technological_equipments->vendor->name }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calender-check"></i>Fecha de Registro
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

