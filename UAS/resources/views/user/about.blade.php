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
<div class="container-fluid p-0">
    <div class="position-relative w-100 vh-100">
        <img src="/image/ft-studio.png" class="img-fluid w-100 h-100" style="object-fit: cover;">
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

<div class="py-5 bg-black bg-opacity-75">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="margin-top: 50px;">
            <div class="col-md-6 col-lg-3 py-3 py-md-0">
                <h1 class="text-white-50 text-start" style="padding-top: 30px; text-align: center;">OUR CREW</h1>
                <br>
                <p class="text-white text-start">
                    We help everyday individuals unlock their potential and find new and exciting ways to feel confident and empowered. Together, we explore the depths of our identity, shedding expectations, and tuning into our emotions to capture all layers of our authentic essence.
                </p>
            </div>
            <div class="col-md-6 col-lg-3 py-3 py-md-0">
                <div class="card text-bg-dark mb-3">
                    <img src="/image/Nath.png" class="card-img-top" style="max-width: 100%;">
                    <div class="card-img-overlay d-flex flex-column align-items-end justify-content-end">
                        <h5 class="card-title text-white">NATHASYA PERNIDYA ASHARI</h5>
                    </div>
                </div>
                <div class="card text-bg-dark">
                    <img src="/image/Obi.png" class="card-img-top" style="max-width: 100%;">
                    <div class="card-img-overlay d-flex flex-column align-items-end justify-content-end">
                        <h5 class="card-title text-white">MUHAMMAD ALFAROBI</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 py-3 py-md-0">
                <div class="card text-bg-dark mb-3">
                    <img src="/image/Nadhia.png" class="card-img-top" style="max-width: 100%;">
                    <div class="card-img-overlay d-flex flex-column align-items-end justify-content-end">
                        <h5 class="card-title text-white">NADHIA JASMINE</h5>
                    </div>
                </div>
                <div class="card text-bg-dark">
                    <img src="/image/Fajar.png" class="card-img-top" style="max-width: 100%;">
                    <div class="card-img-overlay d-flex flex-column align-items-end justify-content-end">
                        <h5 class="card-title text-white">MUHAMMAD FAJAR ARIANSYAH</h5>
                    </div>
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
