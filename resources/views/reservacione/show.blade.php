@extends('layouts.app')

@section('template_title')
    {{ $reservacione->name ?? 'Show Reservacione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Reservaciones</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reservaciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $reservacione->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $reservacione->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $reservacione->email }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $reservacione->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Servicio:</strong>
                            {{ $reservacione->servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $reservacione->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
