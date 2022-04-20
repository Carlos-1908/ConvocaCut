@extends('layouts.app')

@section('template_title')
    {{ $requisito->name ?? 'Show Requisito' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Requisito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('requisitos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Convocatoria:</strong>
                            {{ $requisito->convocatoria }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $requisito->usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Requisitos:</strong>
                            {{ $requisito->requisitos }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
