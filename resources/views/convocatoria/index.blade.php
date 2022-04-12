@extends('layouts.app')

@section('template_title')
    Convocatoria
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Convocatoria') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('convocatorias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
										<th>Email</th>
										<th>Telefono</th>
										<th>Inicio</th>
										<th>Fin</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($convocatorias as $convocatoria)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $convocatoria->nombre }}</td>
											<td>{{ $convocatoria->descripcion }}</td>
											<td>{{ $convocatoria->departamento }}</td>
											<td>{{ $convocatoria->email }}</td>
											<td>{{ $convocatoria->telefono }}</td>
											<td>{{ $convocatoria->inicio }}</td>
											<td>{{ $convocatoria->fin }}</td>

                                            <td>
                                                <form action="{{ route('convocatorias.destroy',$convocatoria->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('convocatorias.show',$convocatoria->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('convocatorias.edit',$convocatoria->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $convocatorias->links() !!}
            </div>
        </div>
    </div>
@endsection
