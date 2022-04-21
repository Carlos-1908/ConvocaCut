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
                <script type="text/javascript">
            function toggle(elemento) {
            if(elemento.value=="3") {
                document.getElementById("form4").style.display = "none";
                document.getElementById("form5").style.display = "none";
            }else{
                if(elemento.value=="4"){
                    document.getElementById("form4").style.display = "block";
                    document.getElementById("form5").style.display = "none";
                }else{
                    if(elemento.value=="5"){
                            document.getElementById("form4").style.display = "block";
                            document.getElementById("form5").style.display = "block";
                        }  
                    }
                }
            }
</script>
<div class="antialiased">
            <p>Antes de capturar los datos, te invitamos a descargar la carta compromiso la cual es un requisito 
            para poder participar, por lo cual podrás descargar en el siguiente botón.</p>
            <a download="CARTA COMPROMISO.pdf" href="{{ route('descargar') }}">Descargar carta compromiso</a>
            <p>Es indispensable que la carta compromiso este firmada por los participantes y sea escaneada junto con los 
            kardex de cada participante en un único archivo PDF.</p>

            <form action="/guardar"  method="post" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h3>Datos del equipo</h3>
                <h4>Numero de integrantes</h4>
                
                <div class="campo-radio">
                    <input type="radio" name="num_Integrantes" value="3"  onclick="toggle(this)" checked>
                    <label for="i3">3</label>
                </div>

                <div class="campo-radio">
                    <input type="radio" name="num_Integrantes" value="4"  onclick="toggle(this)">
                    <label for="i4">4</label>
                </div>

                <div class="campo-radio">
                    <input type="radio" name="num_Integrantes" value="5"  onclick="toggle(this)">
                    <label for="i5">5</label>
                </div>

                <div class="form-group row">
                    <label for="rep" class="col-sm-2 col-form-label">Representante del equipo</label>
                    <div class="col-sm-5">
                        <input name="nombre1" type="text" class="form-control" placeholder="Nombre completo" required>
                        <input name="codigo1" type="text" class="form-control" placeholder="Codigo" required>
                        <input name="semestre1" type="text" class="form-control" placeholder="Semestre" required>
                        <input name="carrera1" type="text" class="form-control" placeholder="Carrera" required>
                        <input name="cu1" type="text" class="form-control" placeholder="Centro universitario" required>
                        <input name="telefono1" type="text" class="form-control"placeholder="Telefono" required>
                        <!--<textarea name="nombres_equipo" rows="4" cols="79" placeholder="Nombres de integrantes"></textarea>-->
                    </div>
                </div><br>

                <div class="form-group row">
                    <label for="i2" class="col-sm-2 col-form-label">Integrante 2</label>
                    <div class="col-sm-5">
                        <input name="nombre2" type="text" class="form-control" placeholder="Nombre completo" required>
                        <input name="codigo2" type="text" class="form-control" placeholder="Codigo" required>
                        <input name="semestre2" type="text" class="form-control" placeholder="Semestre" required>
                        <input name="carrera2" type="text" class="form-control" placeholder="Carrera" required>
                        <input name="cu2" type="text" class="form-control" placeholder="Centro universitario" required>
                        <input name="telefono2" type="text" class="form-control"placeholder="Telefono" required>
                    </div>
                </div><br>

                <div class="form-group row">
                    <label for="i3" class="col-sm-2 col-form-label">Integrante 3</label>
                    <div class="col-sm-5">
                        <input name="nombre3" type="text" class="form-control" placeholder="Nombre completo" required>
                        <input name="codigo3" type="text" class="form-control" placeholder="Codigo" required>
                        <input name="semestre3" type="text" class="form-control" placeholder="Semestre" required>
                        <input name="carrera3" type="text" class="form-control" placeholder="Carrera" required>
                        <input name="cu3" type="text" class="form-control" placeholder="Centro universitario" required>
                        <input name="telefono3" type="text" class="form-control"placeholder="Telefono" required>
                    </div>
                </div><br>


                <div id="form4" style="display:none">
                    <div class="form-group row">
                        <label for="i4" class="col-sm-2 col-form-label">Integrante 4</label>
                        <div class="col-sm-5">
                            <input name="nombre4" type="text" class="form-control" placeholder="Nombre completo">
                            <input name="codigo4" type="text" class="form-control" placeholder="Codigo">
                            <input name="semestre4" type="text" class="form-control" placeholder="Semestre">
                            <input name="carrera4" type="text" class="form-control" placeholder="Carrera">
                            <input name="cu4" type="text" class="form-control" placeholder="Centro universitario">
                            <input name="telefono4" type="text" class="form-control"placeholder="Telefono">  
                        </div>
                    </div>
                </div><br>


                <div id="form5" style="display:none">
                    <div class="form-group row">
                        <label for="i5" class="col-sm-2 col-form-label">Integrante 5</label>
                        <div class="col-sm-5">
                            <input name="nombre5" type="text" class="form-control" placeholder="Nombre completo">
                            <input name="codigo5" type="text" class="form-control" placeholder="Codigo">
                            <input name="semestre5" type="text" class="form-control" placeholder="Semestre">
                            <input name="carrera5" type="text" class="form-control" placeholder="Carrera">
                            <input name="cu5" type="text" class="form-control" placeholder="Centro universitario">
                            <input name="telefono5" type="text" class="form-control"placeholder="Telefono">
                        </div>
                    </div>
                </div><br>

                <div class="kardex">
                    <label for="Kardex">A continuación, se deberá anexar la carta compromiso del equipo y el kardex de 
                    cada uno de los integrantes del equipo en un único archivo PDF:<br></label> 
                    <input type="file" name="Kardex" required><br>
                </div><br>

                <input type="submit" value="Enviar datos">
                <input type="reset" value="Borrar datos">
            </form>

            <!--<form action="/guardar"  method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="kardex">
                    <label for="Kardex">A continuación, se deberá anexar la carta compromiso del equipo y el kardex de 
                    cada uno de los integrantes del equipo en un único archivo PDF:<br></label> 
                    <input type="file" name="Kardex" required><br>
                </div><br>
                <input type="submit" value="Subir">
            </form>-->
        
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
