@extends('layouts.app')

@section('content')

<section class="skills-section">

    <div class="container">

        <!-- TITLE -->
        <div class="text-center mb-5">

            <p class="section-subtitle">
                MY SKILLS
            </p>

            <h1 class="skills-title">
                Technical Expertise
            </h1>

        </div>

        <!-- SKILLS GRID -->
        <div class="row g-6">

            <!-- BACKEND -->
            <div class="col-lg-4">

                <div class="skill-card">

                    <div class="skill-icon">
                        <i class="bi bi-server"></i>
                    </div>

                    <h3>Backend</h3>

                    <ul class="skill-list">

                        <li>PHP</li>
                        <li>Laravel</li>
                        <li>REST APIs</li>
                        <li>Authentication & Authorization</li>
                        <li>Laravel Sanctum</li>
                        <li>MVC Architecture</li>
                        <li>OOP</li>
                        <li>Database Transactions</li>
                        <li>File Upload Handling</li>
                        <li>API Resource Classes</li>
                        <li>Request Validation</li>
                        <li>Service Layer Architecture</li>
                        <li>Eloquent Relationships</li>
                        <li>Query Optimization</li>

                    </ul>

                </div>

            </div>

            <!-- DATABASE -->
            <div class="col-lg-4">

                <div class="skill-card">

                    <div class="skill-icon">
                        <i class="bi bi-database"></i>
                    </div>

                    <h3>Database</h3>

                    <ul class="skill-list">

                        <li>MySQL</li>
                        <li>Eloquent ORM</li>
                        <li>Database Design</li>
                        <li>Database Migrations</li>
                        <li>Foreign Keys & Constraints</li>
                        <li>Indexes & Optimization</li>
                        <li>SQL Queries</li>
                        <li>Data Seeding</li>

                    </ul>

                </div>

            </div>

            <!-- FRONTEND -->
            <div class="col-lg-4">

                <div class="skill-card">

                    <div class="skill-icon">
                        <i class="bi bi-code-slash"></i>
                    </div>

                    <h3>Frontend</h3>

                    <ul class="skill-list">

                        <li>HTML</li>
                        <li>CSS</li>
                        <li>Bootstrap</li>
                        <li>JavaScript</li>

                    </ul>

                </div>

            </div>

            <!-- SOFT SKILLS -->
            <div class="col-lg-4">

                <div class="skill-card">

                    <div class="skill-icon">
                        <i class="bi bi-people"></i>
                    </div>

                    <h3>Soft Skills</h3>

                    <ul class="skill-list">

                        <li>Problem Solving</li>
                        <li>Communication Skills</li>
                        <li>Team Collaboration</li>
                        <li>Time Management</li>
                        <li>Attention to Detail</li>
                        <li>Critical Thinking</li>
                        <li>Adaptability</li>
                        <li>Fast Learning</li>
                        <li>Self Learning</li>
                        <li>Debugging & Troubleshooting</li>
                        <li>Analytical Thinking</li>
                        <li>Project Organization</li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
