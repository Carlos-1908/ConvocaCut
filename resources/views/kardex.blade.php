@extends('layouts.app')

@section('template_title')
    Requisito
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kardex') }}</div>
                <div class="card-body">
                    <div class="row mb-3">
                        <p>Antes de capturar los datos, te invitamos a descargar la carta compromiso la cual es un requisito para poder participar, por lo cual podrás descargar en el siguiente botón.</p>
                        <a download="CARTA COMPROMISO.pdf" href="{{ route('descargar') }}">Descargar carta compromiso</a>
                        <p>Es indispensable que la carta compromiso este firmada por los participantes y sea escaneada junto con los kardex de cada participante en un único archivo PDF.</p>

                        <form action="/guardar"  method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <label for="Kardex">A continuación, se deberá anexar la carta compromiso del equipo y el kardex de cada uno de los integrantes del equipo en un único archivo PDF:<br></label> 
                            <input type="file" name="Kardex" required><br>
                            <input type="submit" value="subir">
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
        
    
@endsection
