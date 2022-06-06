@extends('layouts.app')

@section('template_title')
    {{ $parqueadero->name ?? 'Show Parqueadero' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Parqueadero</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('parqueaderos.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $parqueadero->usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Marca del vehiculo:</strong>
                            {{ $parqueadero->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Placa del vehiculo:</strong>
                            {{ $parqueadero->placa }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha entrada:</strong>
                            {{ $parqueadero->entrada }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha salida:</strong>
                            {{ $parqueadero->salida }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
