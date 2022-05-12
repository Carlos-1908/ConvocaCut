<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ConvocaCUT</title>
        <link rel="icon" type="image/x-icon" href="assets/diamond-half.svg" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
   
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">Centro Universitario de Tonala</a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Iniciar Sesion</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registrarse</a></li>
                       
                    </ul>
                </div>
            </div>
        </nav>

        
        
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">ConvocaCut</h1>
                <p class="lead">El Departamento de Emprendimiento, Comercio y Empresa a través del CReCE Tonalá invita a las y los estudiantes de pregrado del CUTonalá a inscribir proyectos de emprendimiento para ser incubados e impulsar su desarrollo por medio de un curso y asesorías empresariales como parte del proceso de incubación.</p>
                <a class="btn btn-lg btn-light" href="{{ route('home1') }}"> Ver convocatorias</a>
            </div>
        </header>
       
        <!-- About section-->
        <section id="about">
            
            <div class="container px-4">
                
                <div 
                    <div class="col-lg-8">
                        <h2>             Descripcion del programa</h2>
                        <iframe width="1200" height="1200" src="{{asset('archivos/programa_de_incubacion_de_emprendimiento_cut_convocatoria_2022a.pdf')}}" frameborder="0"></iframe>
                        <ul> 
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section
        <section class="bg-light" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Services we offer</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
                    </div>
                </div>
            </div>
        </section>
        -->
        <!-- Contact section
        <section id="contact">
            <div class="container px-6">
                    <div class="col-lg-8">
                    <p class="text-center">Universidad de Gudalajara</p>
                    <p class="text-center">CENTRO UNIVERSITARIO DE TONALÁ</p>
                    <p class="text-center">Campus CUTonalá Av. Nuevo Periférico No. 555 Ejido San José Tateposco, C.P. 45425, Tonalá Jalisco, México</p>
                    <p class="text-center">Teléfono: +52 (33) 20 00 23 00 Ext. 64007 y 64044</p>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4">
                <p class="text-center text-white">CENTRO UNIVERSITARIO DE TONALÁ</p>
                <p class="text-center text-white">Campus CUTonalá Av. Nuevo Periférico No. 555 Ejido San José Tateposco, C.P. 45425, Tonalá Jalisco, México</p>
                <p class="text-center text-white">Teléfono: +52 (33) 20 00 23 00 Ext. 64007 y 64044</p><br>
                <p class="m-0 text-center text-white">Copyright &copy; Universidad de Gudalajara 2022</p>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
