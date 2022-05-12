<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos Equipo</title>
</head>
<body>
    <div class="container">
        <h1>Ya estas registrado</h1>
        <div class="row justify-content-center">
            <table border="1" class="table">
                    <thead>
                        <th> Nombre del equipo</th>
                        <th> Convocatoria a la que participa </th>
                        <th> Integrantes</th>    
                    </thead>
                <tbody>
                    @foreach($Generar as $Pdfg)
                    <tr>
                        <td>{{$Pdfg->nombre_del_equipo}}</td>
                        <td>{{$Pdfg->convocatoria}}</td>
                        <td>{{$Pdfg->nombre1}}<br>
                            {{$Pdfg->nombre2}}<br>
                            {{$Pdfg->nombre3}}<br>
                            {{$Pdfg->nombre4}}<br>
                            {{$Pdfg->nombre5}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
