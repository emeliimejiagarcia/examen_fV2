@extends('layouts.panel')
@section('title','Loans/Show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">

        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0"><i class="fas fa_newspaper"></i> Ver Préstamos </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('loans.index')}}" class= "btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> Volver
                            </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <h6 class="heading-small text-muted mb-4"> Registro de préstamos</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="departure_date">
                                <i class="fas fa-user"></i> Fecha de salida
                            </label>
                            <p>{{ $loans->departure_date }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="expected_date">
                                <i class="fas fa-user"></i> Fecha acordada
                            </label>
                            <p>{{ $loans->expected_date }}</p>
                        </div>
                    </div>
                </div>

                   <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="delivery_date">
                                <i class="fas fa-user"></i> Fecha de entrega
                            </label>
                            <p>{{ $loans->delivery_date }}</p>
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="delivery_observation">
                                <i class="fas fa-user"></i> Observación de la entrega
                            </label>
                            <p>{{ $loans->delivery_observation }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="return_observation">
                                <i class="fas fa-user"></i> Observación de devolución
                            </label>
                            <p>{{ $loans->return_observation }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="loan_date">
                                <i class="fas fa-user"></i> Fecha del préstamo
                            </label>
                            <p>{{ $loans->loan_date }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="loan_duration">
                                <i class="fas fa-user"></i> Duración del préstamo
                            </label>
                            <p>{{ $loans->loan_duration }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="username">
                                <i class="fas fa-user"></i> Nombre del usuario
                            </label>
                            <p>{{ $loans->username }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="user_type">
                                <i class="fas fa-user"></i> Tipo de usuario
                            </label>
                            <p>{{ $loans->user_type }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="area">
                                <i class="fas fa-user"></i> Área
                            </label>
                            <p>{{ $loans->area }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="academic_role">
                                <i class="fas fa-user"></i> Rol académico
                            </label>
                            <p>{{ $loans->academic_role }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="contact_phone">
                                <i class="fas fa-user"></i> Número de contacto
                            </label>
                            <p>{{ $loans->contact_phone }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="user_address">
                                <i class="fas fa-user"></i> Dirección
                            </label>
                            <p>{{ $loans->user_address }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="equipment_name">
                                <i class="fas fa-user"></i> Nombre del Equipo
                            </label>
                            <p>{{ $loans->equipment_name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="equipment_type">
                                <i class="fas fa-user"></i> Tipo de equipo tecnológico
                            </label>
                            <p>{{ $loans->equipment_type }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="brand">
                                <i class="fas fa-user"></i> Identificación del dispositivo
                            </label>
                            <p>{{ $loans->brand }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="model">
                                <i class="fas fa-user"></i> Modelo específico del equipo
                            </label>
                            <p>{{ $loans->model }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="condition_loan">
                                <i class="fas fa-user"></i> Condición de préstamo
                            </label>
                            <p>{{ $loans->condition_loan }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="responsible">
                                <i class="fas fa-user"></i> Responsable
                            </label>
                            <p>{{ $loans->responsible->name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="technological_equipment">
                                <i class="fas fa-user"></i> Equipo Tecnológico
                            </label>
                            <p>{{ $loans->technological_equipment->equipment_name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="register_date">
                                <i class="fas fa-user"></i> Fecha del Préstamo
                            </label>
                            <p>{{ $loans->created_at->format('d-m-Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

