@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-header">{{ __('Datos Equipos') }}</div>
                
 
                <div class="card-body">
                   <table border="1" class="table">
                       <thead>
                           <th> Nombre del equipo </th>
                           <th> Convocatoria a la que participan </th>
                           <th> Integrantes</th>   
                           <th> Codigo</th>
                           <th> Telefonos de contacto</th> 
                           <th> Centro universitario</th>
                           <th> Carrera</th>
                           <th> Semestre</th>
                           <th> Kardex</th>  
                       </thead>
                       <tbody>
                           @foreach($DatosEquipos as $equipo)
                           <tr>
                           <td>{{$equipo->nombre_del_equipo}}</td>
                           <td>{{$equipo->convocatoria}}</td>
                           <td>{{$equipo->nombre1}}<br>
                           {{$equipo->nombre2}}<br>
                           {{$equipo->nombre3}}<br>
                           {{$equipo->nombre4}}<br>
                           {{$equipo->nombre5}}
                           </td>
                           <td>{{$equipo->codigo1}}<br>
                           {{$equipo->codigo2}}<br>
                           {{$equipo->codigo3}}<br>
                           {{$equipo->codigo4}}<br>
                           {{$equipo->codigo5}}
                           </td> 
                           <td>{{$equipo->telefono1}}<br>
                           {{$equipo->telefono2}}<br>
                           {{$equipo->telefono3}}<br>
                           {{$equipo->telefono4}}<br>
                           {{$equipo->telefono5}}
                           </td>
                           <td>{{$equipo->cu1}}<br>
                           {{$equipo->cu2}}<br>
                           {{$equipo->cu3}}<br>
                           {{$equipo->cu4}}<br>
                           {{$equipo->cu5}}
                           </td>
                           <td>{{$equipo->carrera1}}<br>
                           {{$equipo->carrera2}}<br>
                           {{$equipo->carrera3}}<br>
                           {{$equipo->carrera4}}<br>
                           {{$equipo->carrera5}}
                           </td> 
                           <td>{{$equipo->semestre1}}<br>
                           {{$equipo->semestre2}}<br>
                           {{$equipo->semestre3}}<br>
                           {{$equipo->semestre4}}<br>
                           {{$equipo->semestre5}}
                           </td>                      
                           </tr>
                           @endforeach
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection