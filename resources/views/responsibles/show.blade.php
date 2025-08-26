@extends('layouts.panel')
@section('title','Responsible/Show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
               <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa_newspaper"></i> Ver Responsable</h3>
                    </div>
                    <div class="col-4 text-right">
                            <a href="{{ route('responsibles.index')}}" class= "btn btn-sm btn-primary">
                                <i class="fas fa-arrow-left"></i> Volver
                            </a>
                    </div>
                </div>
            </div>

        <div class="card-body">
            <h6 class="heading-small text-muted mb-4"> Información del Responsable</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="name">
                                <i class="fas fa-user"></i> Nombre Completo
                            </label>
                            <p>{{ $responsibles->name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="age">
                                <i class="fas fa-user"></i> Edad
                            </label>
                            <p>{{ $responsibles->age }}</p>
                        </div>
                    </div>
                </div>

                   <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="mail">
                                <i class="fas fa-user"></i> Correo Electrónico
                            </label>
                            <p>{{ $responsibles->mail }}</p>
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="identity_card">
                                <i class="fas fa-user"></i> Cédula
                            </label>
                            <p>{{ $responsibles->identity_card }}</p>
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="phone_number">
                                <i class="fas fa-user"></i> Número Telefónico
                            </label>
                            <p>{{ $responsibles->phone_number }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="departament">
                                <i class="fas fa-user"></i> Departamento
                            </label>
                            <p>{{ $responsibles->departament }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="gender">
                                <i class="fas fa-user"></i> Género
                            </label>
                            <p>{{ $responsibles->gender }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="nationality">
                                <i class="fas fa-user"></i> Nacionalidad
                            </label>
                            <p>{{ $responsibles->nationality }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="address">
                                <i class="fas fa-user"></i> Dirección
                            </label>
                            <p>{{ $responsibles->address }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="academic_role">
                                <i class="fas fa-user"></i> Rol Academico
                            </label>
                            <p>{{ $responsibles->academic_role }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="registration_date">
                                <i class="fas fa-user"></i> Fecha de Registro
                            </label>
                            <p>{{ $responsibles->registration_date }}</p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="register_date">
                                <i class="fas fa-calender-check"></i>Fecha de Matrícula
                            </label>
                            <p>{{ $responsibles->created_at->format('d-m-Y') }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

