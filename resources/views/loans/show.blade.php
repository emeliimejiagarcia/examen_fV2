@extends('layouts.panel')
@section('title','Loans/Show')

@section('content')
<div class="col-x1-12 order-x1-1">
    <div class="card bg-secondary shadow">

        {{-- Header --}}
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0"><i class="fas fa-newspaper"></i> Ver Préstamo </h3>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('loans.index')}}" class="btn btn-sm" style="background-color: #0B3D91; color:white;">
                        <i class="fas fa-arrow-left"></i> Volver
                    </a>
                </div>
            </div>
        </div>

        {{-- Body --}}
        <div class="card-body">
            <h6 class="heading-small text-muted mb-4"> Registro de préstamos</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-calendar-day"></i> Fecha de salida</label>
                            <p>{{ $loans->departure_date }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-calendar-check"></i> Fecha acordada</label>
                            <p>{{ $loans->expected_date }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-calendar-alt"></i> Fecha de entrega</label>
                            <p>{{ $loans->delivery_date }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-sticky-note"></i> Observación de la entrega</label>
                            <p>{{ $loans->delivery_observation }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-sticky-note"></i> Observación de devolución</label>
                            <p>{{ $loans->return_observation }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-calendar-plus"></i> Fecha del préstamo</label>
                            <p>{{ $loans->loan_date }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-clock"></i> Duración del préstamo</label>
                            <p>{{ $loans->loan_duration }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-user"></i> Nombre del usuario</label>
                            <p>{{ $loans->username }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-users"></i> Tipo de usuario</label>
                            <p>{{ $loans->user_type }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-building"></i> Área</label>
                            <p>{{ $loans->area }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-user-graduate"></i> Rol académico</label>
                            <p>{{ $loans->academic_role }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-phone"></i> Número de contacto</label>
                            <p>{{ $loans->contact_phone }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-map-marker-alt"></i> Dirección</label>
                            <p>{{ $loans->user_address }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-desktop"></i> Nombre del Equipo</label>
                            <p>{{ $loans->equipment_name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-laptop-code"></i> Tipo de equipo tecnológico</label>
                            <p>{{ $loans->equipment_type }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-barcode"></i> Identificación del dispositivo</label>
                            <p>{{ $loans->brand }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-microchip"></i> Modelo específico del equipo</label>
                            <p>{{ $loans->model }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-screwdriver-wrench"></i> Condición de préstamo</label>
                            <p>{{ $loans->condition_loan }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-user-tie"></i> Responsable</label>
                            <p>{{ $loans->responsible->name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-laptop"></i> Equipo Tecnológico</label>
                            <p>{{ $loans->technological_equipment->equipment_name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="fas fa-calendar-alt"></i> Fecha del Préstamo</label>
                            <p>{{ $loans->created_at->format('d-m-Y') }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
