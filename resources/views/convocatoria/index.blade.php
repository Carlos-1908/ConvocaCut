@extends('layouts.app')

@section('template_title')
    Convocatoria
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
        <div class = " colx1-12 ">
            <form action="{{route('convocatorias.index')}}" method = "get">
                <input type="text" name = "texto" value="{{$texto}}">
                <input type="submit" class="btn btn-primary"  value= "Buscar">
            </form>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Convocatoria') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('convocatorias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Departamento</th>
										<th>Email Dudas</th>
										<th>Telefono Dudas</th>
										<th>Requisitos</th>
										<th>Fecha De Registro</th>
										<th>Fecha De Revision</th>
										<th>Fecha De Emision De Constancias</th>
										<th>Fecha De Envio De Proyecto</th>
										<th>Fecha De Publicacion De Resutados</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($convocatorias)<=0)
                                        <tr>
                                            <td colspan="11">
                                                No hay resultados
                                            </td>
                                        </tr>
                                    @else
                                    @foreach ($convocatorias as $convocatoria)
                                        <tr>
                                            <td>{{ $convocatoria->id }}</td>
                                            
											<td>{{ $convocatoria->nombre }}</td>
											<td>{{ $convocatoria->descripcion }}</td>
											<td>{{ $convocatoria->departamento }}</td>
											<td>{{ $convocatoria->email_Dudas }}</td>
											<td>{{ $convocatoria->telefono_Dudas }}</td>
											<td>{{ $convocatoria->requisitos }}</td>
											<td>{{ $convocatoria->fecha_de_Registro }}</td>
											<td>{{ $convocatoria->fecha_de_Revision }}</td>
											<td>{{ $convocatoria->fecha_de_Emision_de_Constancias }}</td>
											<td>{{ $convocatoria->fecha_de_Envio_de_Proyecto }}</td>
											<td>{{ $convocatoria->fecha_de_Publicacion_de_Resutados }}</td>
                                            <td>
                                                    <a class="btn btn-sm btn-primary" href="{{ route('convocatorias.show',$convocatoria->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('convocatorias.edit',$convocatoria->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    
                                                    <form action="{{route('estatus.update',$convocatoria->id)}}" method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <label for="" class="" style=" margin-top: 3%;">Estado: </label>
                                                        @if($convocatoria->estatus == 0)
                                                        <select name="estado" id="" style=" margin-bottom: 2%;">
                                                            <option value="0" selected>Desactivo</option>
                                                            <option value="1">Activo</option>
                                                        </select>
                                                        @elseif($convocatoria->estatus == 1)
                                                        <select name="estado" id="" style=" margin-bottom: 3%;">
                                                            <option value="0">Desactivo</option>
                                                            <option value="1" selected>Activo</option>
                                                            </select>
                                                        @endif

                                                    <button type="submit"  class="btn btn-warning btn-sm">Actualizar Estado</button>
                                                    
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            {{$convocatorias->links()}}
                        </div>
                    </div>
                </div>
                {!! $convocatorias->links() !!}
            </div>
        </div>
    </div>
@endsection
