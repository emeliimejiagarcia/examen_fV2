@extends('layouts.panel')
@section('title', 'Área Académica/Show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">

                        <h3 class="mb-0"><i class="fas fa_newspaper"></i> Ver Área académica </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('academic_areas.index') }}" class= "btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4"> Información de área académica</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="area_name">
                                    <i class="fas fa-user"></i>  Nombre de la área
                                </label>
                                <p>{{ $academic_areas->area_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="area_code">
                                    <i class="fas fa-user"></i> Código del área académica
                                </label>
                                <p>{{ $academic_areas->area_code }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="location">
                                    <i class="fas fa-user"></i> Ubicación
                                </label>
                                <p>{{ $academic_areas->location }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="equipment_coordinator">
                                    <i class="fas fa-user"></i> Coordinador de Equipos
                                </label>
                                <p>{{ $academic_areas->equipment_coordinator }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="area_type">
                                    <i class="fas fa-user"></i> Tipo de Área
                                </label>
                                <p>{{ $academic_areas->area_type }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="description">
                                    <i class="fas fa-user"></i> Descripción del área
                                </label>
                                <p>{{ $academic_areas->description }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="equipment_quantity">
                                    <i class="fas fa-user"></i> Cantidad de equipos
                                </label>
                                <p>{{ $academic_areas->equipment_quantity }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="responsible" class="form-control-label">
                                    <i class="fas fa-user"></i> Nombre del responsable
                                </label>
                                <p>{{ $academic_areas->responsible->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="technological_equipment"class="form-control-label">
                                    <i class="fas fa-user"></i> Nombre del equipo tecnológico
                                </label>
                                <p>{{ $academic_areas->technological_equipment->equipment_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calender-check"></i>Fecha de Registro
                                </label>
                                <p>{{ $academic_areas->created_at->format('d-m-Y') }}</p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection

