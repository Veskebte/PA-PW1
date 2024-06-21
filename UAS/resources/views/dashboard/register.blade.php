@extends('layouts.master')
@section('title', 'Register')
@section('content')

<nav class="navbar navbar-expand-lg bg-transparent fixed-top">
    <div class="container">
        <a
            class="navbar-brand me-auto text-light"
            style="font-size: 2rem" href="{{route("home")}}">Focus<span class="text-danger" style="font-size: 2rem">.</span>
        </a>
        <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-center align-items-center flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link mx-lg-2 text-light" aria-current="page" href="{{route("about")}}">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2 text-light" href="{{route("service")}}">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2 text-light" aria-current="page" href="{{route("studio")}}">STUDIO</a>
                </li>
            </ul>
            <div class="navbar-login d-flex justify-content-center align-items-center pe-3" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active mx-lg-2 text-light" href="{{route("login")}}">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid p-0">
    <div class="d-flex justify-content-center align-items-center vh-100 position-relative">
        <img src="image/login-bg.png" class="img-fluid w-100 h-100 position-absolute" style="object-fit: cover;">
        <div class="col-lg-5 position-relative z-1 py-5">
            <div class="card shadow-lg border-0 rounded-lg bg-transparent">
                {{-- Error Alert --}}
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Register</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('proses_register') }}" method="POST" id="registerForm">
                        @csrf
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmail">Email</label>
                            <input class="form-control py-4" id="inputEmail" name="email" type="email" value="{{ old('email') }}" placeholder="Enter your email"/>
                            @if($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputName">Name</label>
                                        <input class="form-control py-4" id="inputName" name="name" type="text" value="{{ old('name') }}" placeholder="Enter your name"/>
                                        @if($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Enter your password"/>
                                        @if($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPasswordConfirmation">Confirm Password</label>
                                        <input class="form-control py-4" id="inputPasswordConfirmation" type="password" name="password_confirmation" placeholder="Confirm your password"/>
                                    </div>
                                    <div class="form-group mt-4 mb-0">
                                        <button class="btn w-100 btn-primary btn-block btn-register" type="submit">Register</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small">
                                    <a href="{{ route('login') }}">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
