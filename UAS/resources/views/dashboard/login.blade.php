@extends('layouts.master')
@section('title', 'Login')
@section('content')

<nav class="navbar navbar-expand-lg bg-transparent bg-opacity-10 fixed-top">
    <div class="container">
        <a class="navbar-brand me-auto text-light" style="font-size: 2rem" href="{{ route('home') }}">
            Focus<span class="text-danger" style="font-size: 2rem">.</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-center align-items-center flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link mx-lg-2 text-light" aria-current="page" href="{{ route('about') }}">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2 text-light" href="{{ route('service') }}">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2 text-light" aria-current="page" href="{{ route('book') }}">BOOK</a>
                </li>
            </ul>
            <div class="navbar-login d-flex justify-content-center align-items-center pe-3">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active mx-lg-2 text-light" href="{{ route('login') }}">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


<div class="container-fluid p-0">
    <div class="d-flex justify-content-center align-items-center vh-100 position-relative">
        <img src="image/login-bg.png" class="img-fluid w-100 h-100 position-absolute" style="object-fit: cover;">
        <div class="col-lg-5 position-relative z-1">
            <div class="card shadow-lg border-0 rounded-lg bg-transparent">
                {{-- Error Alert --}}
                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('error')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Login</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('proses_login')}}" method="POST" id="logForm">
                        {{ csrf_field() }}
                        <div class="form-group">
                            @error('login_gagal')
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <span class="alert-inner--text"><strong>Warning!</strong>  {{ $message }}</span>
                            </div>
                            @enderror
                            <label class="small mb-1" for="inputEmailAddress">Username (Email)</label>
                            <input
                                class="form-control py-4"
                                id="inputEmailAddress"
                                name="email"
                                type="text"
                                value="{{old('email')}}"
                                placeholder="Masukkan Username"/>
                            @if($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputPassword">Password</label>
                            <input
                                class="form-control py-4"
                                id="inputPassword"
                                type="password"
                                name="password"
                                placeholder="Masukkan Password"/>
                            @if($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button class="btn w-100 btn-primary btn-block btn-login" type="submit">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small">
                        <a href="{{route('register')}}">Belum Punya Akun? Daftar!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
