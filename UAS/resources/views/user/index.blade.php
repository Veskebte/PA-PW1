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
        <img src="image/pic-bg.png" class="img-fluid w-100 h-100" style="object-fit: cover;">
        <div class="position-absolute w-100 h-100 top-0 d-flex justify-content-center align-items-center">
            <div class="container text-center text-white">
                <h1 style="font-size: 3rem;">It's time to unleash your creativity!</h1>
                <span style="font-size: 1rem">
                Whatever your ideas, we can help you bring them to life.
                </span>
                <br>
                <a href="#desc" class="btn btn-dark mt-3">Discover more</a>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-black bg-opacity-75" id="desc">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                <img src="image/ft-home.jpg" class="img-fluid rounded float-md-end mb-3 ms-md-3" style="width: 300px; height: 400px;">
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
                    <a href="#experiences" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover justify-content-center align-items-center">
                        VIEW OUR EXPERIENCES
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-dark" id="experiences">
    <div class="container d-flex flex-column justify-content-center align-content-center">
        <h1 class="text-center text-white-50" style="padding-top: 30px">Our Experiences</h1>
        <p class="text-center text-white">
            We break the structure of our offerings into three components:
        </p>
        <div class="row justify-content-center align-items-center" style="margin-top: 50px">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card position-relative text-bg-dark">
                    <img src="image/ft-studio.png" class="card-img">
                    <div class="card-img-overlay d-flex flex-column text-end justify-content-end">
                        <h5 class="card-title">PHOTO STUDIO</h5>
                        <p class="card-text">
                            Step into a captivating studio photoshoot — a journey of self-discovery and empowerment. Our mindful and purposeful approach provides the perfect setting to capture and celebrate your unique identity through photography.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card position-relative text-bg-dark">
                    <img src="image/vd-studio.png" class="card-img">
                    <div class="card-img-overlay d-flex flex-column text-end justify-content-end">
                        <h5 class="card-title">VIDEO STUDIO</h5>
                        <p class="card-text">
                            Dive into an exceptional studio video shoot — anchored in mindfulness and intention, our studio creates the ideal backdrop to reveal and honor your unique creative expression through the lens of videography.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card position-relative text-bg-dark">
                    <img src="image/bk-studio.png" class="card-img">
                    <div class="card-img-overlay d-flex flex-column text-end justify-content-end">
                        <h5 class="card-title">CLASSES</h5>
                        <p class="card-text">
                            Explore our classes designed to foster creativity and self-discovery. Embrace growth and exploration in a supportive environment, unlocking your full potential.
                        </p>
                        <span class="fst-italic mt-1">
                            COMING SOON
                        </span>
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
                <p class="small mb-0">&copy; 2024 Focus | Made With Bootstrap</p>
            </div>
        </div>
    </div>
</footer>

@endsection
