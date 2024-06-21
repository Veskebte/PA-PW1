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

<div class="container-fluid bg-dark p-0">
    <div class="position-relative w-100 vh-100">
        <div class="position-absolute w-100 h-100 top-0 d-flex justify-content-center align-items-center">
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-5 d-flex justify-content-center">
                        <img src="/image/ft-thumb.png" class="img-fluid rounded mb-3" style="max-width: 80%; height: auto;">
                    </div>
                    <div class="col-12 col-md-4">
                        <h1 class="text-white-50 text-center text-md-start mb-5">
                            SELF-DISCOVERY VISUAL EXPERIENCE
                        </h1>
                        <p class="text-white fs-5 text-center text-md-start mb-5">
                            Embark on a groundbreaking encounter in Palembang, where creativity meets exploration.
                            This goes beyond mere visuals, it's a chance to creatively connect with and fostering a deeper understanding and appreciation of your unique journey.
                        </p>
                        <div class="d-flex flex-column flex-md-row justify-content-center justify-content-md-start">
                            <div class="col">
                                <div class="p-2 w-100">
                                    <a href="{{route("book")}}" class="btn btn-outline-light rounded-pill w-100" type="button">
                                        GET STARTED
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-2 w-100">
                                    <a href="#choose" class="btn btn-outline-light rounded-pill w-100" type="button">
                                        LEARN MORE
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-dark bg-opacity-75" id="choose">
    <div class="container px-4 text-center">
        <div class="row gx-5">
            <div class="col-12 col-md-6 text-start">
                <div class="p-3 col-md-8">
                    <h1 class="text-white-50 text-start">Design Your Shoot in 3 Steps</h1>
                </div>
                <div class="p-3">
                    <ul class="text-light list-unstyled mt-3">
                        <li class="mb-5">
                            <h5 class="fst-italic fs-3 mb-2">01. Pick Your Expressions</h5>
                            <p>
                                We love helping our clients' exploration of their creativity and expression.
                                Whether you embrace or challenge different facets of yourself, we are here to guide you in discovering the various dimensions of your identity."
                            </p>
                        </li>
                        <li class="mb-5">
                            <h5 class="fst-italic fs-3 mb-2">02. Craft Your Own Definition</h5>
                            <p>
                                Each expression is only a starting point - you need to to imbue it with your own meaning and purpose.
                                Rather than confining you to our interpretation of these expressions, we encourage you to delve deep and discover what they signify to you on both an emotional and visual level.
                            </p>
                        </li>
                        <li class="mb-5">
                            <h5 class="fst-italic fs-3 mb-2">03. Visualize Your Expressions</h5>
                            <p>
                                We assist you in envisioning how to confidently embody various aspects of yourself.
                                How does each version of you move, communicate, and dress uniquely?
                                From selecting colors, textures, and styles, we encourage creativity in curating your wardrobe to authentically express each of the facets you wish to vent.                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="p-3">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="/image/cr-1.png" class="d-block w-100">
                          </div>
                          <div class="carousel-item">
                            <img src="/image/cr-2.png" class="d-block w-100">
                          </div>
                          <div class="carousel-item">
                            <img src="/image/cr-3.png" class="d-block w-100">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-center py-5">
            <div class="d-grid">
                <p class="text-white-50 fst-italic mb-0">
                    Through this experience, I want to...
                </p>
                <p class="text-light mb-3">
                    learn that my creativity is not bound by my gender, race, or societal background.
                </p>
                <a href="{{ route("book") }}" class="btn btn-outline-light rounded-pill mt-3" type="button">
                    GET STARTED
                </a>
                <p class="text-light mt-3">
                    Learn about our Pricing and
                    <br>
                    Book a Free Consult to Get Started.
                </p>
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
