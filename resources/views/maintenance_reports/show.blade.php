@extends('layouts.panel')
@section('title','Informes de Mantenimiento/Show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
               <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa_newspaper"></i> Ver Informes de Mantenimiento </h3>
                    </div>
                    <div class="col-4 text-right">
                            <a href="{{ route('maintenance_reports.index')}}" class= "btn btn-sm btn-primary">
                                <i class="fas fa-arrow-left"></i> Volver
                            </a>
                    </div>
                </div>
            </div>

        <div class="card-body">
            <h6 class="heading-small text-muted mb-4"> Información de Informes de Mantenimiento</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="report_date">
                                <i class="fas fa-user"></i> Fecha del Informe
                            </label>
                            <p>{{ $maintenance_reports->report_date }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="description">
                                <i class="fas fa-user"></i> Descripción del Informe
                            </label>
                            <p>{{ $maintenance_reports->description }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="action">
                                <i class="fas fa-user"></i> Acción Realizada
                            </label>
                            <p>{{ $maintenance_reports->action }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="equipment_condition">
                                <i class="fas fa-user"></i> Condición del Equipo
                            </label>
                            <p>{{ $maintenance_reports->equipment_condition }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="equipment_name">
                                <i class="fas fa-user"></i> Nombre del Equipo
                            </label>
                            <p>{{ $maintenance_reports->equipment_name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="maintenance_date">
                                <i class="fas fa-user"></i> Fecha del mantenimiento
                            </label>
                            <p>{{ $maintenance_reports->maintenance_date }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="maintenance_type">
                                <i class="fas fa-user"></i> Tipo de mantenimiento
                            </label>
                            <p>{{ $maintenance_reports->maintenance_type }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="technician_name">
                                <i class="fas fa-user"></i> Nombre del técnico
                            </label>
                            <p>{{ $maintenance_reports->technician_name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="maintenance_cost">
                                <i class="fas fa-user"></i> Costo del mantenimiento
                            </label>
                            <p>{{ $maintenance_reports->maintenance_cost }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="report_status">
                                <i class="fas fa-user"></i> Estado del informe
                            </label>
                            <p>{{ $maintenance_reports->report_status }}</p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="responsible_id">
                                <i class="fas fa-user"></i> Responsable
                            </label>
                            <p>{{ $maintenance_reports->responsible->name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="technological_equipment_id">
                                <i class="fas fa-user"></i> Equipo Tecnológico
                            </label>
                            <p>{{ $maintenance_reports->technological_equipment->equipment_name }}</p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="register_date">
                                <i class="fas fa-calender-check"></i> Fecha de informe de mantenimiento
                            </label>
                            <p>{{ $maintenance_reports->created_at->format('d-m-Y') }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
