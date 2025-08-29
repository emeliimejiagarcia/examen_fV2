@extends('layouts.panel')

@section('title','Historial de Préstamos/Crear')

@section('content')

<div class="col-x1-12 order-x1-1">
    <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0"><i class="fas fa-plus-circle"></i> Registrar historial de préstamos </h3>
                </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('loan_histories.index')}}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body container-fluid">
                <form action="{{ route('loan_histories.store')}}" method="POST">
                @csrf
                @include('loan_histories.form')
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
