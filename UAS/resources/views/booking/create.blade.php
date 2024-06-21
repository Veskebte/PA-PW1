@extends('layouts.master')
@section('title', 'Form Booking')
@section('content')
<nav class="navbar navbar-expand-lg bg-transparent fixed-top">
    <div class="container">
        <a class="navbar-brand me-auto text-light" style="font-size: 2rem" href="{{ route('user.index') }}">
            Focus<span class="text-danger" style="font-size: 2rem">.</span>
        </a>
        <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-center align-items-center flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link mx-lg-2 text-light" aria-current="page" href="{{ route('user.about') }}">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2 text-light" href="{{ route('user.service') }}">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2 text-light" aria-current="page" href="{{ route('user.book') }}">BOOK</a>
                </li>
            </ul>
            <div class="navbar-login d-flex justify-content-center align-items-center pe-3" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active mx-lg-2 text-light" href="{{ route('logout') }}">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="py-5 bg-dark d-flex justify-content-center align-items-center">
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-6 text-start" style="max-width: 476px;">
                <h1 class="text-white-50">Book Your Discovery Call</h1>
                <br>
                <p class="text-light">In our 30-minute call together, we want to help you help you.</p>
                <ul class="text-light list-unstyled">
                    <li class="d-flex mb-3">
                        <u class="fst-italic">01.</u>
                        <span class="ms-2">Identify which parts of you you'd like to explore, unearth, and re-define.</span>
                    </li>
                    <li class="d-flex mb-3">
                        <u class="fst-italic">02.</u>
                        <span class="ms-2">Visualize what those different versions of you look and feel like. How do they show up differently than you?</span>
                    </li>
                    <li class="d-flex mb-3">
                        <u class="fst-italic">03.</u>
                        <span class="ms-2">Help you realize that all these versions are within you and answer any questions you have about how we can help you connect with those versions in our unique way.</span>
                    </li>
                    <li class="d-flex mb-3">
                        <u class="fst-italic">04.</u>
                        <span class="ms-2">Get you booked in to your very own DASU Work of Art Photoshoot.</span>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <div class="bg-dark text-white p-4">
                    <h3 class="text-center mb-4">Booking Form</h3>
                    @if (session()->has('info'))
                        <div class="alert alert-success">
                            {{ session()->get('info') }}
                        </div>
                    @endif
                    <form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label text-white">Name *</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-white">Email *</label>
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label text-white">Mobile *</label>
                            <input type="text" name="mobile" value="{{ old('mobile') }}" class="form-control">
                            @error('mobile')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="service" class="form-label text-white">Service *</label>
                            <select class="form-select" id="service" name="service" required>
                                <option value="Photoshoot">Photoshoot</option>
                                <option value="Videoshoot">Videoshoot</option>
                            </select>
                            @error('service')
                                <div class="text-danger">
                                    <p>The service field is required.</p>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="booking_date" class="form-label text-white">Booking Date *</label>
                            <input type="date" name="booking_date" value="{{ old('booking_date') }}" class="form-control">
                            @error('booking_date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="bg-black text-light py-5 d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Focus<span class="text-danger">.</span></h4>
                <p>
                    A studio in PLM guiding individuals in exploring, redefining,
                    and celebrating their inner diversity with a portrait experience focused on
                    embodiment and self-exploration.
                </p>
            </div>
            <div class="col-md-6 text-md-end">
                <h6 class="fw-bold">Navigate</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('about') }}" class="text-decoration-none text-light py-2 mb-2 d-block">About Us</a></li>
                    <li><a href="{{ route('service') }}" class="text-decoration-none text-light py-2 mb-2 d-block">Services</a></li>
                    <li><a href="{{ route('book') }}" class="text-decoration-none text-light py-2 mb-2 d-block">Book Now</a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <p class="small mb-0"> &copy; {{date("Y")}} Focus. | Made With Bootstrap</p>
            </div>
        </div>
    </div>
</footer>
@endsection
