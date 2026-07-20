@extends('layouts.app')

@section('content')

<section class="hero-section d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">

            <!--left content-->
            <div class="col-lg-6">
                <p class="text-info">HELLO, I'M</p>

                <h1 class="hero-title">
                    Sara Mohamed
                </h1>

                <h2 class="hero-subtitle">
                    Junior Backend Laravel Developer
                </h2>
                <p class="hero-text mt-4">
                    Building scalable web applications with Laravel, PHP, and MySQL.
                </p>

                <div class="mt-4 d-flex gap-3">
                    <a href="https://drive.google.com/file/d/1PFKCwn_w64jGf2Bjnp8CQzGvaN2rv_r6/view?usp=sharing" class="btn btn-info px-4 py-2">
                        View My CV
                    </a>

                    <a href="/contact" class="btn btn-outline-light px-4 py-2">
                        Contact Me
                    </a>
                </div>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-lg-5">

                <div class="hero-image-wrapper">

                    <!-- Glow -->
                    <div class="image-glow"></div>

                    <!-- Main Card -->
                    <div class="hero-image-card">

                        <img
                            src="{{ asset('images/personal2.jpg') }}"
                            alt="Sara Mohamed"
                            class="hero-image"
                        >

                    </div>

                    <!-- Border -->
                    <div class="image-border"></div>

                </div>

            </div>

            <!--stats-->
            <div class="hero-stats row g-4">

                <div class="col-md-4">

                    <div class="stat-card">

                        <div class="stat-icon">
                            <i class="bi bi-code-slash"></i>
                        </div>

                        <div>
                            <h3>3+</h3>
                            <p>Projects Completed</p>
                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="stat-card">

                        <div class="stat-icon">
                            <i class="bi bi-database"></i>
                        </div>

                        <div>
                            <h3>1+</h3>
                            <p>Year Experience</p>
                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="stat-card">

                        <div class="stat-icon">
                            <i class="bi bi-mortarboard"></i>
                        </div>

                        <div>
                            <h3>Continuous</h3>
                            <p>Learning Every Day</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

@endsection
