@extends('layouts.panel')
@section('title','Historial de préstamos/Show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">

        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0"><i class="fas fa_newspaper"></i> Ver historial de préstamos </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('loan_historys.index')}}" class= "btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> Volver
                            </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <h6 class="heading-small text-muted mb-4"> Historial de Préstamos</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="username">
                                <i class="fas fa-user"></i> Nombre de usuario
                            </label>
                            <p>{{ $loan_historys->username }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="equipment_name">
                                <i class="fas fa-user"></i> Nombre del equipo tecnológico
                            </label>
                            <p>{{ $loan_historys->equipment_name }}</p>
                        </div>
                    </div>
                </div>

                   <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="type_equipment">
                                <i class="fas fa-user"></i> Tipo de equipo tecnológico
                            </label>
                            <p>{{ $loan_historys->type_equipment }}</p>
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="loan_date">
                                <i class="fas fa-user"></i> Fecha del préstamo
                            </label>
                            <p>{{ $loan_historys->loan_date }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="input_status">
                                <i class="fas fa-user"></i> Estado de entrada
                            </label>
                            <p>{{ $loan_historys->input_status }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="exit_status">
                                <i class="fas fa-user"></i> Estado de salida
                            </label>
                            <p>{{ $loan_historys->exit_status }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="condition">
                                <i class="fas fa-user"></i> Condición del equipo tecnológico
                            </label>
                            <p>{{ $loan_historys->condition }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="loan_code">
                                <i class="fas fa-user"></i> Código de préstamo
                            </label>
                            <p>{{ $loan_historys->loan_code }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="description">
                                <i class="fas fa-user"></i> Descripción del préstamo
                            </label>
                            <p>{{ $loan_historys->description }}</p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="loan_id">
                                <i class="fas fa-user"></i> Préstamos
                            </label>
                            <p>{{ $loan_historys->loans->loan_date }}</p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="register_date">
                                <i class="fas fa-user"></i> Fecha del Préstamo
                            </label>
                            <p>{{ $loan_historys->created_at->format('d-m-Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
