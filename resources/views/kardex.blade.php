@extends('layouts.app')

@section('template_title')
    Requisito
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($message = Session::get('warning'))
                        <div class="alert alert-warning">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    
                <div class="card-header">{{ __('Subir documentos') }}</div>
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
                            <a class="btn btn-primary" download="CARTA COMPROMISO.pdf" href="{{ route('descargar') }}">Descargar carta compromiso</a>
                            <br><p>Es indispensable que la carta compromiso este firmada por los participantes y sea escaneada junto con los 
                            kardex de cada participante en un único archivo PDF.</p>

                            <form action="/guardar"  method="post" role="form" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <h3>Datos generales</h3>

                                <div class="form-group row">
                                    <label for="rep" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-5">
                                        <input name="nombre_del_equipo" type="text" class="form-control"  placeholder="Nombre de equipo" value="{{old('nombre_del_equipo')}}">
                                        @error('nombre_del_equipo')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                        <input name="convocatoria" type="text" class="form-control" placeholder="Convocatoria a la que aplica" value="{{old('convocatoria')}}">
                                        @error('convocatoria')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div><br>


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
                                        <input name="nombre1" type="text" class="form-control"  placeholder="Nombre completo" value="{{old('nombre1')}}">
                                        @error('nombre1')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                        <input name="codigo1" type="text" class="form-control" placeholder="Codigo" value="{{old('codigo1')}}">
                                        @error('codigo1')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                        <input name="semestre1" type="text" class="form-control" placeholder="Semestre" value="{{old('semestre1')}}">
                                        @error('semestre1')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                        <input name="carrera1" type="text" class="form-control" placeholder="Carrera" value="{{old('carrera1')}}">
                                        @error('carrera1')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                        <input name="cu1" type="text" class="form-control" placeholder="Centro universitario" value="{{old('cu1')}}">
                                        @error('cu1')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                        <input name="telefono1" type="text" class="form-control" placeholder="Telefono" value="{{old('telefono1')}}">
                                        @error('telefono1')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div><br>

                                <div class="form-group row">
                                    <label for="i2" class="col-sm-2 col-form-label">Integrante 2</label>
                                    <div class="col-sm-5">
                                        <input name="nombre2" type="text" class="form-control" placeholder="Nombre completo" value="{{old('nombre2')}}">
                                        @error('nombre2')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                        <input name="codigo2" type="text" class="form-control" placeholder="Codigo" value="{{old('codigo2')}}">
                                        @error('codigo2')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                        <input name="semestre2" type="text" class="form-control" placeholder="Semestre" value="{{old('semestre2')}}">
                                        @error('semestre2')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                        <input name="carrera2" type="text" class="form-control" placeholder="Carrera" value="{{old('carrera2')}}">
                                        @error('carrera2')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                        <input name="cu2" type="text" class="form-control" placeholder="Centro universitario" value="{{old('cu2')}}">
                                        @error('cu2')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                        <input name="telefono2" type="text" class="form-control"placeholder="Telefono" value="{{old('telefono2')}}">
                                        @error('telefono2')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div><br>

                                <div class="form-group row">
                                    <label for="i3" class="col-sm-2 col-form-label">Integrante 3</label>
                                     <div class="col-sm-5">
                                        <input name="nombre3" type="text" class="form-control" placeholder="Nombre completo" value="{{old('nombre3')}}">
                                        @error('nombre3')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                        <input name="codigo3" type="text" class="form-control" placeholder="Codigo" value="{{old('codigo3')}}">
                                        @error('codigo3')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                        <input name="semestre3" type="text" class="form-control" placeholder="Semestre" value="{{old('semestre3')}}">
                                        @error('semestre3')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                        <input name="carrera3" type="text" class="form-control" placeholder="Carrera" value="{{old('carrera3')}}">
                                        @error('carrera3')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                        <input name="cu3" type="text" class="form-control" placeholder="Centro universitario" value="{{old('cu3')}}">
                                        @error('cu3')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                        <input name="telefono3" type="text" class="form-control"placeholder="Telefono" value="{{old('telefono3')}}">
                                        @error('telefono3')
                                        <p style="color:#FF0000";>{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div><br>


                                <div id="form4" style="display:none">
                                    <div class="form-group row">
                                        <label for="i4" class="col-sm-2 col-form-label">Integrante 4</label>
                                        <div class="col-sm-5">
                                            <input name="nombre4" type="text" class="form-control" placeholder="Nombre completo" value="{{old('nombre4')}}">
                                            <input name="codigo4" type="text" class="form-control" placeholder="Codigo" value="{{old('codigo4')}}">
                                            @error('codigo4')
                                            <p style="color:#FF0000";>{{ $message }}</p>
                                            @enderror
                                            <input name="semestre4" type="text" class="form-control" placeholder="Semestre" value="{{old('semestre4')}}">
                                            <input name="carrera4" type="text" class="form-control" placeholder="Carrera" value="{{old('carrera4')}}">
                                            <input name="cu4" type="text" class="form-control" placeholder="Centro universitario" value="{{old('cu4')}}">
                                            <input name="telefono4" type="text" class="form-control"placeholder="Telefono" value="{{old ('telefono4')}}">  
                                            @error('telefono4')
                                            <p style="color:#FF0000";>{{ $message }}</p>
                                            @enderror
                                        </div>
                                     </div>
                                </div><br>


                                <div id="form5" style="display:none">
                                    <div class="form-group row">
                                        <label for="i5" class="col-sm-2 col-form-label">Integrante 5</label>
                                        <div class="col-sm-5">
                                            <input name="nombre5" type="text" class="form-control" placeholder="Nombre completo" value="{{old('nombre5')}}">
                                            <input name="codigo5" type="text" class="form-control" placeholder="Codigo" value="{{old('codigo5')}}">
                                            @error('codigo5')
                                            <p style="color:#FF0000";>{{ $message }}</p>
                                            @enderror
                                            <input name="semestre5" type="text" class="form-control" placeholder="Semestre" value="{{old('semstre5')}}">
                                            <input name="carrera5" type="text" class="form-control" placeholder="Carrera" value="{{old('carrera5')}}">
                                            <input name="cu5" type="text" class="form-control" placeholder="Centro universitario" value="{{old('cu5')}}">
                                            <input name="telefono5" type="text" class="form-control"placeholder="Telefono" value="{{old('telefono5')}}">
                                            @error('codigo5')
                                            <p style="color:#FF0000";>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div><br>

                                <div class="kardex">
                                    <label for="Kardex">A continuación, se deberá anexar la carta compromiso del equipo y el kardex de 
                                    cada uno de los integrantes del equipo en un único archivo PDF:<br></label> 
                                    <input type="file" name="Kardex" accept="application/pdf"><br>
                                    @error('Kardex')
                                            <p style="color:#FF0000";>{{ $message }}</p>
                                    @enderror
                                </div><br>

                                <input type="submit" value="Enviar datos">
                                <input type="reset" value="Borrar datos">
                            </form>        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
