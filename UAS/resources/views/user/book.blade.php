@extends("layouts.master")
@section('content')
<nav class="navbar navbar-expand-lg bg-transparent fixed-top">
    <div class="container">
        <a class="navbar-brand me-auto text-light" style="font-size: 2rem" href="{{ route('user.index') }}">
            Focus<span class="text-danger" style="font-size: 2rem">.</span></a>
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

<div class="container-fluid bg-black bg-opacity-25 p-0">
    <div class="position-relative w-100 vh-100">
        <div class="position-absolute w-100 h-100 top-0 d-flex justify-content-center align-items-center">
            <div class="container text-center text-body-secondary mx-auto" style="max-width: 800px">
                <h1 style="font-size: 3rem;">Let your creativity flow freely!</h1>
                <div class="mt-5">
                    <p class="fw-light fs-3">
                        Discover your true self as a Work of Art through our unique focus on <u>intention</u>,
                        <u>embodiment</u>, and <u>expression</u>.
                    </p>
                </div>
                <i class='bx bx-chevron-down display-1 mt-2'><a href="#"></a></i>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-black bg-opacity-75">
    <div class="container d-flex flex-column justify-content-center align-items-center"></div>
</div>

<div class="py-5 bg-black bg-opacity-25">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="row justify-content-center align-items-center" style="margin-top: 50px">
            <div class="col-md-4 py-3 py-md-0">
                <h1 class="text-end text-body-secondary display-5">Begin Your Journey with a Discovery Call.</h1>
                <br>
                <p class="text-end text-body-secondary">
                    In this personalized session, we'll align with your aspirations and design that celebrates every facet of your essence.
                    Discover our services details for full transparency.
                    Together, we'll unveil, embrace, and celebrate the unique masterpiece that is you.
                </p>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card position-relative text-bg-dark">
                    <img src="/image/pt-woman.png" class="card-img">
                    <div class="card-img-overlay d-flex flex-column text-start justify-content-end">
                        <h5 class="card-title fst-italic">Photoshoot Details</h5>
                        <ul class="card-text list-unstyled mt-3">
                            <li>Access to our Virtual Interactive Moodboarding and Intention Setting Activity</li>
                            <li>Personalized Hair & Makeup</li>
                            <li>1-Hour Focus<span class="text-danger">.</span> Photoshoot (fully-guided through every pose and expression)</li>
                            <li>2 Images Included (with options to purchase more)</li>
                        </ul>
                        <h6 class="mt-3">STARTS FROM IDR650K</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card position-relative text-bg-dark">
                    <img src="/image/vd-purple.png" class="card-img">
                    <div class="card-img-overlay d-flex flex-column text-start justify-content-end">
                        <h5 class="card-title fst-italic">Videoshoot Details</h5>
                        <ul class="card-text list-unstyled mt-3">
                            <li>Access to our Virtual Interactive Moodboarding and Intention Setting Activity</li>
                            <li>Personalized Hair & Makeup</li>
                            <li> Focus<span class="text-danger">.</span> Videoshoot (fully-guided through every pose and expression)</li>
                            <li>Options to purchase additional edited videos</li>
                        </ul>
                        <h6 class="mt-3">STARTS FROM IDR350K PER HOUR</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-center py-5">
            <div class="d-grid">
                <a href="{{route("booking.create")}}" class="btn btn-outline-dark rounded-pill" type="button">
                    BOOK YOUR COMPLIMENTARY DISCOVERY CALL
                </a>
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
