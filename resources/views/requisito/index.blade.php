@extends('layouts.app')

@section('template_title')
    Requisito
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registrarte a Convocatoria') }}
                            </span>

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

										<th>Convocatoria</th>
										<th>Descripcion</th>
										<th>Departamento</th>
                                        <th>Inicio de Registro</th>
										<th>Fin de Registro</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($requisitos as $requisito)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $requisito->convocatoria }}</td>
											<td>{{ $requisito->usuario }}</td>
											<td>{{ $requisito->requisitos }}</td>

                                            <td>
                                                <form action="{{ route('requisitos.destroy',$requisito->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('convocatorias.show',$convocatorias->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('requisitos.edit',$requisito->id) }}"><i class="fa fa-fw fa-edit"></i> Registrarte</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $requisitos->links() !!}
            </div>
        </div>
    </div>
@endsection
