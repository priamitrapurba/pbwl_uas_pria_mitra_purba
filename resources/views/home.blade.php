@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg" style="background-color: darkgreen;">
                    <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">{{ __('Dashboard') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ url('/guru') }}">Guru</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ url('/kelas') }}">Kelas</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h5 class="card-title text-center text-light">
                            Selamat datang Di <strong>SIFO GURU PONPES MKI</strong>
                        </h5>
                        <p class="text-center text-decoration-none text-light ">
                            {{ __('Selamat Datang, Pria Mitra Purba') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
