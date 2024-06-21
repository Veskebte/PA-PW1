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

<div class="py-5 bg-black bg-opacity-75">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                <img src="image/ft-about-1.jpg" class="img-fluid rounded float-md-end mb-3 ms-md-3" style="width: 300px; height: 400px;">
            </div>
            <div class="col-12 col-md-8">
                <p class="text-white-50 fs-2 text-center text-md-start">
                    Focus. is more than a studio — It's a space where art meets intentionality.
                </p>

                <p class="text-white text-center text-md-start">
                    Within the vibrant heart of Palembang, we focus on helping you bring your ideas to life.
                    Here, you are not merely a subject to be captured, but an artist crafting your own unique expression.
                    Let your soul be the pallete, your emotions the vibrant hues, and the lens of the camera a mirror reflecting your truest essence.
                    <br><br>
                    Every click of camera and stroke of the brush, is a step towards embracing the work of art that is you.
                </p>

                <p class="py-5 d-flex justify-content-center justify-content-md-center">
                    <a href="#" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover justify-content-center align-items-center">
                        VIEW OUR EXPERIENCES
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-dark">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center text-white-50" style="padding-top: 30px">Our Experiences</h2>
        <div class="row justify-content-center align-items-center" style="margin-top: 50px">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">PHOTOSHOOT</h5>
                        <p class="card-text text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, officia velit. Tempore qui autem unde accusantium praesentium magnam recusandae pariatur.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">VIDEOSHOOT</h5>
                        <p class="card-text text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, officia velit. Tempore qui autem unde accusantium praesentium magnam recusandae pariatur.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">STUDIO</h5>
                        <p class="card-text text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, officia velit. Tempore qui autem unde accusantium praesentium magnam recusandae pariatur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5 d-flex justify-content-center justify-content-md-end">
            <a href="{{ route('service') }}" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                FIND OUT MORE
            </a>
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
