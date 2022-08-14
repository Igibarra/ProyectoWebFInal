@extends('layouts.app')

@section('template_title')
    Reserva tu Cita
@endsection
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Reserva con Genesis Spa</span>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('reservaciones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('reservacione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
