<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sara Mohamed | Backend Laravel Developer</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
>
</head>
<body>
    <!--header-->

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">

        <div class="container">

            <div class="d-flex align-items-center gap-4 social-links">

                <!-- LinkedIn -->
                <a
                    href="https://www.linkedin.com/in/sara-mohamed6295/"
                    target="_blank"
                    class="social-link"
                >
                    <i class="bi bi-linkedin"></i>
                    LinkedIn
                </a>

                <!-- GitHub -->
                <a
                    href="https://github.com/sara55m"
                    target="_blank"
                    class="social-link"
                >
                    <i class="bi bi-github"></i>
                    GitHub
                </a>

                <!-- Gmail -->
                <a
                    href="mailto:sara.mohamed7611250@gmail.com"
                    class="social-link"
                >
                    <i class="bi bi-envelope-fill"></i>
                    Gmail
                </a>

            </div>

            <!-- Mobile Toggle -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-4">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'nav-active' : '' }}" href="/">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'nav-active' : '' }}" href="/about">
                            About
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('skills') ? 'nav-active' : '' }}" href="/skills">
                            Skills
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('projects') ? 'nav-active' : '' }}" href="/projects">
                            Projects
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('trainings') ? 'nav-active' : '' }}" href="/trainings">
                            Trainings
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('experience') ? 'nav-active' : '' }}" href="/experience">
                            Experience
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'nav-active' : '' }}" href="/contact">
                            Contact
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
