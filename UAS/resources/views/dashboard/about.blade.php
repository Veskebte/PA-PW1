@extends("layouts.master")

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
    <div class="position-relative w-100 vh-100">
        <img src="image/ft-studio.png" class="img-fluid w-100 h-100" style="object-fit: cover;">
        <div class="position-absolute w-100 h-100 top-0 d-flex justify-content-end align-items-center">
            <div class="container text-white text-end" style="max-width: 600px;">
                <p>DISCOVER THE FOCUS<span class="text-danger">.</span> WORK OF ART EXPERIENCE</p>
                <br>
                <p class="fs-5">
                    We've created an experience to ignite your creativity and bring your ideas to life.
                    With our supportive environment and expert guidance, we empower you to explore and express your artistic vision fully.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-black bg-opacity-75" id="desc">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <h1 class="text-white-50 fs-1 text-center text-md-start">
            OUR CREW
        </h1>
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
