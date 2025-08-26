@extends('layouts.panel')
@section('title','Registration/Show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
               <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa_newspaper"></i> Ver Registro </h3>
                    </div>
                    <div class="col-4 text-right">
                            <a href="{{ route('registrations.index')}}" class= "btn btn-sm btn-primary">
                                <i class="fas fa-arrow-left"></i> Volver
                            </a>
                    </div>
                </div>
            </div>

        <div class="card-body">
            <h6 class="heading-small text-muted mb-4"> Información de registro</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="username">
                                <i class="fas fa-user"></i> Nombre de usuario
                            </label>
                            <p>{{ $registrations->username }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="current_condition">
                                <i class="fas fa-user"></i> Condición actual del equipo
                            </label>
                            <p>{{ $registrations->current_condition }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="last_update">
                                <i class="fas fa-user"></i> Última actualización
                            </label>
                            <p>{{ $registrations->last_update }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="date_time">
                                <i class="fas fa-user"></i> Fecha y hora del registro
                            </label>
                            <p>{{ $registrations->date_time }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="loan_date">
                                <i class="fas fa-user"></i> Fecha del préstamo
                            </label>
                            <p>{{ $registrations->loan_date }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="return_date">
                                <i class="fas fa-user"></i> Fecha de devolución
                            </label>
                            <p>{{ $registrations->return_date }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="loan_duration">
                                <i class="fas fa-user"></i> Duración del préstamo
                            </label>
                            <p>{{ $registrations->loan_duration }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="user_type">
                                <i class="fas fa-user"></i> Tipo de Usuario
                            </label>
                            <p>{{ $registrations->user_type }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="user_type">
                                <i class="fas fa-user"></i> Tipo de Usuario
                            </label>
                            <p>{{ $registrations->user_type }}</p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="equipment_name">
                                <i class="fas fa-user"></i> Nombre del equipo
                            </label>
                            <p>{{ $registrations->equipment_name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="equipment_number">
                                <i class="fas fa-user"></i> Número del equipo
                            </label>
                            <p>{{ $registrations->equipment_number }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="serial_number">
                                <i class="fas fa-user"></i> Número de serie del equipo
                            </label>
                            <p>{{ $registrations->serial_number }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="condition_loan">
                                <i class="fas fa-user"></i> Condición del préstamo
                            </label>
                            <p>{{ $registrations->condition_loan }}</p>
                        </div>
                    </div>
                </div>

            <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="vendor">
                                <i class="fas fa-user"></i> Proveedor
                            </label>
                            <p>{{ $registrations->vendor->name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="loans">
                                <i class="fas fa-user"></i> Préstamos
                            </label>
                            <p>{{ $registrations->loans->loan_date }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="technological_equipment">
                                <i class="fas fa-user"></i> Equipo Tecnológico
                            </label>
                            <p>{{ $registrations->technological_equipment->equipment_name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="type_equipment">
                                <i class="fas fa-user"></i> Tipo de Equipo tecnológico
                            </label>
                            <p>{{ $registrations->type_equipment->equipment_name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="register_date">
                                <i class="fas fa-calender-check"></i> Fecha de registro
                            </label>
                            <p>{{ $registrations->created_at->format('d-m-Y') }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
