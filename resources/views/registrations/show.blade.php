@extends('layouts.panel')
@section('title', 'Registration/Show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"></i> Ver Registro </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('registrations.index') }}" class="btn btn-sm btn-primary">
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
                                <label class="form-control-label"><i class="fas fa-user"></i> Nombre de usuario</label>
                                <p>{{ $registrations->username }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label"><i class="fas fa-laptop-medical"></i> Condición actual del
                                    equipo</label>
                                <p>{{ $registrations->current_condition }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label"><i class="fas fa-sync-alt"></i> Última
                                    actualización</label>
                                <p>{{ $registrations->last_update }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label"><i class="fas fa-clock"></i> Fecha y hora del
                                    registro</label>
                                <p>{{ $registrations->date_time }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label"><i class="fas fa-calendar-plus"></i> Fecha del
                                    préstamo</label>
                                <p>{{ $registrations->loan_date }}</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label"><i class="fas fa-calendar-check"></i> Fecha de
                                    devolución</label>
                                <p>{{ $registrations->return_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label"><i class="fas fa-hourglass-half"></i> Duración del
                                    préstamo</label>
                                <p>{{ $registrations->loan_duration }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label"><i class="fas fa-users"></i> Tipo de Usuario</label>
                                <p>{{ $registrations->user_type }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label"><i class="fas fa-desktop"></i> Nombre del equipo</label>
                                <p>{{ $registrations->equipment_name }}</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label"><i class="fas fa-hashtag"></i> Número del equipo</label>
                                <p>{{ $registrations->equipment_number }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label"><i class="fas fa-barcode"></i> Número de serie</label>
                                <p>{{ $registrations->serial_number }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label"><i class="fas fa-clipboard-check"></i> Condición del
                                    préstamo</label>
                                <p>{{ $registrations->condition_loan }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label"><i class="fas fa-truck"></i> Proveedor</label>
                                <p>{{ optional($registrations->vendor)->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label"><i class="fas fa-handshake"></i> Préstamo</label>
                                <p>{{ optional($registrations->loan)->loan_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label"><i class="fas fa-microchip"></i> Equipo
                                    Tecnológico</label>
                                <p>{{ optional($registrations->technological_equipment)->equipment_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label"><i class="fas fa-layer-group"></i> Tipo de Equipo</label>
                                <p>{{ optional($registrations->type_equipment)->equipment_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label"><i class="fas fa-calendar-day"></i> Fecha de
                                    registro</label>
                                <p>{{ $registrations->created_at->format('d-m-Y') }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
