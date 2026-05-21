@extends('layouts.app')

@section('content')

<section class="about-section">

    <div class="container">

        <div class="row align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-7">

                <p class="section-subtitle">
                    ABOUT ME
                </p>

                <h1 class="about-title">
                    Passionate Backend Developer
                </h1>

                <p class="about-text">
                    Junior Backend Laravel Developer with hands-on experience
                    building scalable web applications using Laravel, PHP,
                    MySQL, and REST APIs.

                    Graduated in 2023 from the faculty of Computers and Information
                    in Mansoura University with an excellent degree and as the sixth on my class.

                    Experienced in developing booking systems, job portals,
                    blog platforms, and backend dashboards with clean
                    architecture and database design principles.

                    Passionate about backend development, problem solving,
                    performance optimization, and continuously learning modern
                    web technologies to build secure and efficient applications.
                </p>

                <div class="about-info">

                    <div class="info-item">
                        <span>Name:</span>
                        Sara Mohamed
                    </div>

                    <div class="info-item">
                        <span>Email:</span>
                        sara.mohamed7611250@gmail.com
                    </div>

                    <div class="info-item">
                        <span>Location:</span>
                        Egypt , Dakahlia , Mansoura
                    </div>

                    <div class="info-item">

                        <span>Education:</span>

                        <p class="mb-1">
                            Faculty of Computers and Information — Mansoura University
                        </p>

                        <p class="info-date">
                            2019 - 2023
                        </p>

                        <a
                            href="https://drive.google.com/file/d/1mxAiMCUO0Y_FtQWboeaWjQAyVWG2BChG/view?usp=drive_link"
                            target="_blank"
                            class="certificate-link"
                        >
                            View Certificate
                        </a>

                    </div>

                    <div class="info-item">
                        <span>Specialization:</span>
                        Laravel Backend Development
                    </div>

                </div>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-lg-5 text-center">

                <div class="about-image-wrapper">

                    <div class="about-image-border"></div>

                    <img
                        src="{{ asset('images/personal3.jpg') }}"
                        alt="Sara Mohamed"
                        class="about-image"
                    >

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
