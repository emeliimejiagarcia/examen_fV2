@extends('layouts.panel')
@section('title','Type_equipment/Show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
               <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-desktop"></i> Ver tipo de equipos </h3>
                    </div>
                    <div class="col-4 text-right">
                            <a href="{{ route('type_equipments.index')}}" class= "btn btn-sm btn-primary">
                                <i class="fas fa-arrow-left"></i> Volver
                            </a>
                    </div>
                </div>
            </div>

        <div class="card-body">
            <h6 class="heading-small text-muted mb-4"> Información del Tipo de Equipos Tecnológicos</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="equipment_name">
                                <i class="fas fa-laptop"></i> Nombre del equipo
                            </label>
                            <p>{{ $type_equipments->equipment_name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="description">
                                <i class="fas fa-align-left"></i> Descripción del equipo
                            </label>
                            <p>{{ $type_equipments->description }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="loan_time">
                                <i class="fas fa-clock"></i> Fecha de préstamo
                            </label>
                            <p>{{ $type_equipments->loan_time }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="worth">
                                <i class="fas fa-dollar-sign"></i> Valor del equipo
                            </label>
                            <p>{{ $type_equipments->worth }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="power_consumption">
                                <i class="fas fa-bolt"></i> Consumo de energía
                            </label>
                            <p>{{ $type_equipments->power_consumption }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="technology_category">
                                <i class="fas fa-layer-group"></i> Categoría de Tecnología
                            </label>
                            <p>{{ $type_equipments->technology_category }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="code">
                                <i class="fas fa-barcode"></i> Código del equipo
                            </label>
                            <p>{{ $type_equipments->code }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="type_status">
                                <i class="fas fa-check-circle"></i> Estado del equipo
                            </label>
                            <p>{{ $type_equipments->type_status }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="creation_date">
                                <i class="fas fa-calendar-plus"></i> Fecha de creación
                            </label>
                            <p>{{ $type_equipments->creation_date }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="technological_equipment_id">
                                <i class="fas fa-microchip"></i> Nombre del equipo tecnológico
                            </label>
                            <p>{{ $type_equipments->technological_equipment->equipment_name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="register_date">
                                <i class="fas fa-calendar-check"></i> Fecha de registro
                            </label>
                            <p>{{ $type_equipments->created_at->format('d-m-Y') }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
