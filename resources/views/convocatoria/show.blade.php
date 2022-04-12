@extends('layouts.app')

@section('template_title')
    {{ $convocatoria->name ?? 'Show Convocatoria' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Convocatoria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('convocatorias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $convocatoria->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $convocatoria->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $convocatoria->departamento }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $convocatoria->email }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $convocatoria->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Inicio:</strong>
                            {{ $convocatoria->inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fin:</strong>
                            {{ $convocatoria->fin }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
