@extends('layouts.app')
@section('content')
<section id="projects" class="section-padding">
    <div class="container">

        <h2 class="section-title">Projects</h2>

        <div class="row mt-5 g-4">
            <!--Booking Management System-->

            <div class="col-lg-4">
                <div class="project-card">

                    <div class="project-image-wrapper">
                        <img
                        src="{{ asset('images/Booking.png') }}"
                        class="img-fluid project-image"
                        alt="Booking-Management-System"
                    >

                    </div>

                    <div class="p-4">
                        <h4>Booking Management System</h4>

                        <p>
                            • Developed a scalable booking platform with Laravel 12, featuring a RESTful API for users and a Filament v5 admin dashboard for managing the entire system, with role-based access control (Admin, Super Admin, User) enforced through Laravel Policies. <br/>
                            • Designed a robust booking and payment system using Stripe Checkout, supporting full and partial payments with minimum payment amount rules, room availability validation, booking expiration, due dates, and invoice generation. Leveraged database transactions, pessimistic locking, and idempotent payment processing to ensure consistency and eliminate race conditions under concurrent requests. <br/>
                            • Implemented refunds driven by each property's cancellation policy rules, including reward points cancellation, plus a reward points system for users. <br/>
                            • Integrated AI features using the Groq model: an AI property search, an AI assistant, an AI travel planner that builds a complete trip program from user preferences (country, city, budget, stay duration, interests, travel categories) with follow-up conversation support, and an AI review summary that generates a concise summary of all approved reviews for a property. <br/>
                            • Built an offers module supporting both general and property-specific offers, along with modules for properties, rooms, cities, amenities, reviews, favorites, and payment transactions, with advanced filtering, searching, and pagination. <br/>
                            • Implemented multi-currency support: users view prices in their preferred currency and enter payment amounts that are converted back to the app's default currency for Stripe processing. Users can also save payment methods and trip plans. <br/>
                            • Developed asynchronous and real-time features using Queues, Events, Listeners, Scheduled Jobs, and Pusher broadcasting. Built a notification system with Mailtrap email notifications (booking confirmations, cancellations with attached invoices, payment, offer, review, arrival, and due date reminders) and admin database notifications for bookings, payments, and reviews. <br/>
                            • Optimized performance and reliability using Redis caching, eager loading, model observers, and a service-layer architecture following Laravel best practices and SOLID principles (Form Requests, API Resources, Policies, Localization, clean maintainable code). <br/>
                            • Implemented secure authentication with Laravel Sanctum, including email verification and OTP-based verification, multilingual support (English & Arabic), and comprehensive admin analytics through Filament widgets and dashboards. <br/>
                            • Deployed the application to production on Wasmer with an Aiven managed database. Live demo: <a href="https://booking-app-sara55m.wasmer.app/admin" target="_blank" rel="noopener">booking-app-sara55m.wasmer.app/admin</a> <br/>
                            • Tested and documented all API endpoints with Postman, using collection variables and authenticated requests. The collection is included in the GitHub repository: <a href="https://github.com/sara55m/Booking-App/blob/main/docs/Booking.postman_collection.json" target="_blank" rel="noopener">docs/Booking.postman_collection.json</a><br/>
                        </p>

                        <a
                            href="https://github.com/sara55m/Booking-App"
                            target="_blank"
                            class="project-link"
                        >
                            <i class="bi bi-github"></i>
                            View Source Code
                        </a>

                        <div class="d-flex gap-2 flex-wrap">
                            <span class="badge bg-info">Laravel 12</span>
                            <span class="badge bg-info">PHP 8.2</span>
                            <span class="badge bg-info">MySQL</span>
                            <span class="badge bg-info">REST API</span>
                            <span class="badge bg-info">Filament v5</span>
                            <span class="badge bg-info">Sanctum</span>
                            <span class="badge bg-info">Stripe</span>
                            <span class="badge bg-info">Groq AI</span>
                            <span class="badge bg-info">Redis</span>
                            <span class="badge bg-info">Queues & Scheduler</span>
                            <span class="badge bg-info">Pusher</span>
                            <span class="badge bg-info">Mailtrap</span>
                            <span class="badge bg-info">Aiven</span>
                            <span class="badge bg-info">Wasmer</span>
                            <span class="badge bg-info">Bootstrap</span>
                        </div>
                    </div>

                </div>
            </div>

            <!--Invoices Management System-->

            <div class="col-lg-4">
                <div class="project-card">

                    <div class="project-image-wrapper">
                        <img
                        src="{{ asset('images/Invoices.png') }}"
                        class="img-fluid project-image"
                        alt="Invoices-Management-System"
                    >

                    </div>

                    <div class="p-4">
                        <h4>Invoices Management System</h4>

                        <p>
                            • A website for managing invoices where admins and users can track the invoices statistics through the home page. <br/>
                            • Users can select the website language (English or Arabic) from a dropdown menu.<br/>
                            • Admin and user roles and their permissions are managed by the super admin based on database roles-permissions where users can have multiple roles and each role has many permissions which are secured using middlewares to avoid unauthorized actions. Roles and authorities can be added edited or deleted only by the Admin.<br/>
                            • Admins can add ,edit and delete sections and products and view invoices and clients reports where they can search for invoices using invoice type ,number or section and product in addition to start and end date to limit the search to a specific time period.<br/>
                            • Admins and Users can create, edit ,delete and archive invoices and add , delete or download invoices attachments.<br/>
                            • Admins and Users can also copy invoices and change their payment status to categorize invoices to paid ,partially paid and unpaid invoices.<br/>
                            • Admins can receive notifications for adding invoices by any user made using database notifications.<br/>
                        </p>

                        <a
                            href="https://github.com/sara55m/Invoices-Management-System"
                            target="_blank"
                            class="project-link"
                        >
                            <i class="bi bi-github"></i>
                            View Source Code
                        </a>

                        <div class="d-flex gap-2 flex-wrap">
                            <span class="badge bg-info">Laravel</span>
                            <span class="badge bg-info">PHP</span>
                            <span class="badge bg-info">MySQL</span>
                            <span class="badge bg-info">HTML5</span>
                            <span class="badge bg-info">CSS3</span>
                            <span class="badge bg-info">Bootstrap</span>
                        </div>
                    </div>

                </div>
            </div>

             <!--Jobee-->
             <div class="col-lg-4">
                <div class="project-card">

                    <div class="project-image-wrapper">
                        <img
                        src="{{ asset('images/Jobee.png') }}"
                        class="img-fluid project-image"
                        alt="Jobee"
                    >
                    </div>

                    <div class="p-4">
                        <h4>Jobee Platform</h4>

                        <p>
                            • A job portal platform for job seekers in computer science related fields where users can create accounts ,view their personal profile ,edit profile details ,upload profile photos and resumes.<br/>
                            • Job seekers can explore diverse job opportunities or search for them using keywords, job title, job type or location and apply to jobs or save them for later. <br/>
                            •  Admins can access a dashboard where they can view users and jobs and manage them.<br/>
                        </p>

                        <div class="mt-4 mb-4">

                            <a
                                href="https://github.com/sara55m/Jobee"
                                target="_blank"
                                class="project-link"
                            >
                                <i class="bi bi-github"></i>
                                View Source Code
                            </a>

                        </div>

                        <div class="d-flex gap-2 flex-wrap">
                            <span class="badge bg-info">Laravel</span>
                            <span class="badge bg-info">PHP</span>
                            <span class="badge bg-info">MySQL</span>
                            <span class="badge bg-info">HTML5</span>
                            <span class="badge bg-info">CSS3</span>
                            <span class="badge bg-info">Javacsript</span>
                            <span class="badge bg-info">Bootstrap</span>
                        </div>
                    </div>

                </div>
            </div>

            <!--Blog-->

            <div class="col-lg-4">
                <div class="project-card">

                    <div class="project-image-wrapper">
                        <img
                        src="{{ asset('images/Blog.png') }}"
                        class="img-fluid project-image"
                        alt="Blog"
                    >
                    </div>

                    <div class="p-4">
                        <h4>Blog</h4>

                        <p>
                            • A dynamic blog platform where users can create accounts ,view their personal profile ,edit and delete accounts , explore diverse posts, and engage through comments.<br/>
                            <br/>
                            • Users can search for posts based on categories , authors and tags.<br/>
                            <br/>
                            • Users can follow authors and subscribe for updates and receive mail notifications.<br/>
                            <br/>
                            • The Admin can access a dashboard where they can add ,edit or delete posts and categories.<br/>
                            <br/>
                        </p>

                        <a
                            href="https://github.com/sara55m/Blog/tree/master"
                            target="_blank"
                            class="project-link"
                        >
                            <i class="bi bi-github"></i>
                            View Source Code
                        </a>

                        <div class="d-flex gap-2 flex-wrap">
                            <span class="badge bg-info">Laravel</span>
                            <span class="badge bg-info">PHP</span>
                            <span class="badge bg-info">MySQL</span>
                            <span class="badge bg-info">HTML5</span>
                            <span class="badge bg-info">CSS3</span>
                            <span class="badge bg-info">Javascript</span>
                            <span class="badge bg-info">Bootstrap</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

@endsection
