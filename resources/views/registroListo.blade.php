@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>
                
 
                <div class="card-body">
                   <h1>Ya estas registrado</h1>
                   <form action="/GenerarPdf" method="get" role="form" enctype="multipart/form-data">
                       <h2>Descarga el archivo de tu equipo</h2>
                       <input name="nombre_del_equipo" type="hidden" class="form-control" value="{{ Auth::user()->name }}">
                       <button type="submit" class="btn btn-primary">Generar pdf</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection