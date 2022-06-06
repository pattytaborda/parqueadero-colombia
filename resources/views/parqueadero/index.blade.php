@extends('layouts.app')

@section('template_title')
    Parqueadero
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Parqueadero') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('parqueaderos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Id</th>

										<th>Usuario</th>
										<th>Marca del vehiculo</th>
										<th>Placa del vehiculo</th>
										<th>Entrada</th>
										<th>Salida</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($parqueaderos as $parqueadero)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $parqueadero->usuario }}</td>
											<td>{{ $parqueadero->marca }}</td>
											<td>{{ $parqueadero->placa }}</td>
											<td>{{ $parqueadero->entrada }}</td>
											<td>{{ $parqueadero->salida }}</td>

                                            <td>
                                                <form action="{{ route('parqueaderos.destroy',$parqueadero->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('parqueaderos.show',$parqueadero->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('parqueaderos.edit',$parqueadero->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $parqueaderos->links() !!}
            </div>
        </div>
    </div>
@endsection
