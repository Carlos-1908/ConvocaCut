@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-header">{{ __('Convocatorias') }}</div>
                
 
                <div class="card-body">
                   <table border="1" class="table">
                       <thead>
                           <th> Nombre </th>
                           <th> Descripcion </th>
                           <th> Departamento</th>
                           <th> Email dudas</th>
                           <th> Telefono dudas</th>
                           <th> Requisitos </th>
                           <th> Fecha de registro </th>
                           <th> Fecha de revision </th>
                           <th> Fecha de emision de constancias </th>
                           <th> Fecha de envio de proyectos </th>
                           <th> Fecha de publicacion de resultados </th>    
                       </thead>
                       <tbody>
                            @foreach($Convoca as $Convoc)
                            <tr>
                            <td>{{$Convoc->nombre}}</td>
                            <td>{{$Convoc->descripcion}}</td>
                            <td>{{$Convoc->departamento}}</td>
                            <td>{{$Convoc->email_Dudas }}</td>
                            <td>{{$Convoc->telefono_Dudas }}</td>
                            <td>{{$Convoc->requisitos}}</td>
                            <td>{{$Convoc->fecha_de_Registro}}</td>
                            <td>{{$Convoc->fecha_de_Revision}}</td>
                            <td>{{$Convoc->fecha_de_Emision_de_Constancias}}</td>
                            <td>{{$Convoc->fecha_de_Envio_de_Proyecto}}</td>
                            <td>{{$Convoc->fecha_de_Publicacion_de_Resutados}}</td>
                            <td><a class="btn btn-primary" href="{{ route('kardex') }}">{{ __('Registrarse') }}</a> </td>   
                            <td>
                                @if (Auth::user())
                                    <a class="btn btn-primary" href="{{ route('requisitos.create') }}">{{ __('Enviar Requisitos') }}</a>
                                @endif
                            </td>
                            <!-- <td><a class="btn btn-primary" href="{{ route('kardex') }}">{{ __('Resultados de Convocatoria') }}</a></td>                    -->
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
