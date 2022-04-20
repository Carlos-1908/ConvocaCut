@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Convocatorias') }}</div>
                
 
                <div class="card-body">
                   <table border="1" class="table">
                       <thead>
                           <th> ID </th>
                           <th> Nombre </th>
                           <th> Descripcion </th>
                           <th> Departamento</th>
                           <th> Email</th>
                           <th> Telefono</th>
                           <th> Incio </th>
                           <th> Fin </th>
                           <input type="button">
                       </thead>
                       <tbody>
                           @foreach($Convoca as $Convoc)
                           <tr>
                           <td>{{ $Convoc->id }}</td>
                           <td>{{$Convoc->nombre}}</td>
                           <td>{{$Convoc->descripcion}}</td>
                           <td>{{$Convoc->departamento}}</td>
                           <td>{{$Convoc->email}}</td>
                           <td>{{$Convoc->telefono}}</td>
                           <td>{{$Convoc->inicio}}</td>
                           <td>{{$Convoc->fin}}</td>
                           <td><input type="button"></td>
                           
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
