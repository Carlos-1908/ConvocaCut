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
                            <span class="card-title">Mostrar convocatorias</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('convocatorias.index') }}"> Regresar</a>
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
                            <strong>Email Dudas:</strong>
                            {{ $convocatoria->email_Dudas }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono Dudas:</strong>
                            {{ $convocatoria->telefono_Dudas }}
                        </div>
                        <div class="form-group">
                            <strong>Requisitos:</strong>
                            {{ $convocatoria->requisitos }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Registro:</strong>
                            {{ $convocatoria->fecha_de_Registro }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Revision:</strong>
                            {{ $convocatoria->fecha_de_Revision }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Emision De Constancias:</strong>
                            {{ $convocatoria->fecha_de_Emision_de_Constancias }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Envio De Proyecto:</strong>
                            {{ $convocatoria->fecha_de_Envio_de_Proyecto }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Publicacion De Resutados:</strong>
                            {{ $convocatoria->fecha_de_Publicacion_de_Resutados }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
