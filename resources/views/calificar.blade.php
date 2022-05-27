@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                <div class="card-header">{{ __('Calificar') }}</div>
                <div class="card-body">
                   <table border="1" class="table">
                       <thead>
                           <th> Convocatoria que participa </th>
                           <th> Usuario </th>
                           <th> Requisitos entregados </th>
                           <th> Calificacion </th>   
                       </thead>
                       <tbody>
                            @foreach($Calif as $Calificar)
                            <tr>
                            <td>{{$Calificar->convocatoria}}</td>
                            <td>{{$Calificar->usuario}}</td>
                            <td>{{$Calificar->requisitos}}</td>
                            <td>{{$Calificar->calificacion}}</td>
                            <td><form action="{{route('calificacion.update',$Calificar->id)}}"  method="post" role="form" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                Calificacion <br><input type="number" name="calificacion" min="0" max="100">
                                <br><input type="submit" class="btn btn-primary" value="Calificar">
                            </form></td>
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