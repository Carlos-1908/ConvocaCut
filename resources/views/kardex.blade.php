<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>kardex</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

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
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @if (auth::check())
                    <ul class="navbar-nav me-auto">
                        <a class="nav-link" href="{{ route('convocatorias.index') }}">{{ __('Convocatorias') }}</a>
                        <a class="nav-link" href="{{ url('/kardex') }}">{{ __('Kardex') }}</a>
                    </ul>
                    @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesion') }}</a>
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesion') }}
                                    </a>
 
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
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
        
    </body>
</html>
