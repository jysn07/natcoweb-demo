<div class="container">
    
    <div class="about-img">
        <img src="{{ asset('Images/carousel/SLIDER_4.webp') }}" class="img-fluid" alt="about us">
        <div class="about-txt">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
            <h1>
                About Us
            </h1>
            <p>Committed to advancing health through high-quality, accessible medicines nationwide.</p>

        </div>
    </div>
<br>
<br>
    <section class="about-section py-5">
    <div class="container">
        <div class="row align-items-center gy-5">

            <!-- Left Image -->
            <div class="col-lg-6 text-center">
                <img src="Images/about_us/natco-team-who-we-are.webp" class="img-fluid about-image" alt="About Us">
            </div>

            <!-- Right Content -->
            <div class="col-lg-6">

                <span class="about-label">About Us</span>

                <h2 class="about-title mt-2 mb-4">
                    Who We Are
                </h2>

                <p class="about-description">
                    Natco Lifesciences Philippines Inc. is a subsidiary of NATCO Pharma
                    Limited, India. The subsidiary was established in the year 2018 in
                    the Philippines to register, market and distribute high quality and
                    niche, FDA-approved pharmaceutical products directly in the Philippine
                    market.
                </p>

                <p class="about-description">
                    Natco Lifesciences Philippines is managed by innovative and experienced
                    staff based in the Philippines. The company has a local office and
                    warehouse distribution channel.
                </p>

                <!-- Stats -->
                <div class="row g-3 mt-4">

                    <div class="col-md-4">
                        <div class="stat-card active-card">

                            <i class="fa-solid fa-hand-holding-medical stat-icon"></i>

                            <h3>8,200+</h3>

                            <p>
                                Items Distributed
                                <br>
                                Nationwide
                            </p>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="stat-card">

                            <i class="fa-solid fa-handshake stat-icon"></i>

                            <h3>8,200+</h3>

                            <p>
                                Active Distributors
                                <br>
                                Nationwide
                            </p>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="stat-card">

                            <i class="fa-solid fa-notes-medical stat-icon"></i>

                            <h3>4.9/5</h3>

                            <p>
                                FDA Registered
                                <br>
                                Products
                            </p>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
<br>
<br>
</div>

<!-- Mission & Vision -->

<section class="mission-vision">

    <div class="container">

        <!-- Heading -->
        <div class="text-center text-white">
            <h2 class="fw-bold">
                Our Mission and <span class="text-vision">Vision</span>
            </h2>
        </div>

        <!-- Cards -->
        <div class="row justify-content-center mt-5 g-4">

            <!-- Mission -->
            <div class="col-lg-5 col-md-6">
                <div class="mv-card">

                    <div class="icon-circle">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>

                    <div class="mv-txt">

                    <div class="card-header-custom">
                        Mission
                    </div>

                    <div class="card-body p-4">
                        <p>
                            To provide high-quality and specialized pharmaceutical products that are safe, effective, and accessible, improving the health and well-being of patients in the Philippines.
                        </p>
                    </div>
                    </div>

                </div>
            </div>

            <!-- Vision -->
            <div class="col-lg-5 col-md-6">
                <div class="mv-card">

                    <div class="icon-circle">
                        <i class="fa-solid fa-eye"></i>
                    </div>

                    <div class="mv-txt">

                    <div class="card-header-custom">
                        Vision
                    </div>

                    <div class="card-body p-4">
                        <p>
                            To be a trusted leader in providing innovative and high-quality specialty medicines that improve patient lives across the Philippines.
                        </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Corporate Video -->
<section class="company-video py-5">
    <div class="container">
        <div class="row align-items-center g-5">

            <!-- Video -->
            <div class="col-lg-7">
                <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow">
                    <iframe
                        src="https://www.youtube.com/embed/n6x9v9af3oU"
                        title="Natco Corporate Video"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

            <!-- Content -->
            <div class="col-lg-5">

                <span class="section-label">Discover Natco</span>

                <h2 class="section-title mt-2">
                    See How We Make Healthcare More Accessible
                </h2>

                <p class="section-text">
                    Discover how Natco Lifesciences Philippines, a subsidiary of Natco Pharma Limited, India, delivers high-quality, FDA-approved pharmaceutical products while upholding the global standards of innovation, quality, and patient care established by its parent company.
                </p>

                <a href="{{ route('natcoProducts') }}" class="btn btn-primary px-4 py-2 mt-3">
                    Explore Our Products
                </a>

            </div>

        </div>
    </div>
</section>
<br>

<!-- Our Team -->

<section class="board-section py-5">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mb-5">
            <span class="section-subtitle">Our Team</span>
            <h2 class="section-title">Board of Directors</h2>
        </div>

        <div class="row justify-content-center gx-4 gy-5">

            <!-- Member -->
            <div class="col-lg-4 col-md-6">
                <div class="director-card">

                    <img src="{{ asset('Images/about_us/generic.webp') }}" alt="Director">

                    <div class="director-info">
                        <h3>Siddhart Alapati</h3>
                        <p>President</p>
                    </div>

                </div>
            </div>

            <!-- Member -->
            <div class="col-lg-4 col-md-6">
                <div class="director-card">

                    <img src="{{ asset('Images/about_us/michelle_panemanglor.png') }}" alt="Director">

                    <div class="director-info">
                        <h3>Ameeta Michelle Panemanglor</h3>
                        <p>Treasurer</p>
                    </div>

                </div>
            </div>

            <!-- Member -->
            <div class="col-lg-4 col-md-6">
                <div class="director-card">

                    <img src="{{ asset('Images/about_us/generic.webp') }}" alt="Director">

                    <div class="director-info">
                        <h3>Celia Panemanglor</h3>
                        <p>Secretary</p>
                    </div>

                </div>
            </div>

            <!-- Member -->
            <div class="col-lg-4 col-md-6">
                <div class="director-card">

                    <img src="{{ asset('Images/about_us/generic.webp') }}" alt="Director">

                    <div class="director-info">
                        <h3>Subba Rao Mente</h3>
                        <p>Director</p>
                    </div>

                </div>
            </div>

            <!-- Member -->
            <div class="col-lg-4 col-md-6">
                <div class="director-card">

                    <img src="{{ asset('Images/about_us/generic.webp') }}" alt="Director">

                    <div class="director-info">
                        <h3>Ma. Merceditas N. Gutierrez</h3>
                        <p>Director</p>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
<br>
<hr class="container">
<br>


<!-- Senior Management -->


<section class="board-section py-5">
    <div class="container">


        <!-- Section Heading -->
        <div class="text-center mb-5">
            <span class="section-subtitle">Our Team</span>
            <h2 class="section-title">The Management</h2>
        </div>

        <div class="row justify-content-center gx-4 gy-5">

            <!-- Member -->
            <div class="col-lg-4 col-md-6">
                <div class="director-card">

                    <img src="{{ asset('Images/about_us/michelle_panemanglor.png') }}" alt="Director">

                    <div class="director-info">
                        <h3>Michelle Panemanglor</h3>
                        <p>Country Head</p>
                    </div>

                </div>
            </div>

            <!-- Member -->
            <div class="col-lg-4 col-md-6">
                <div class="director-card">

                    <img src="{{ asset('Images/about_us/rajeev_panemanglor.png') }}" alt="Director">

                    <div class="director-info">
                        <h3>Rajeev Panemanglor</h3>
                        <p>Sales & Marketing Head</p>
                    </div>

                </div>
            </div>

            <!-- Member -->
            <div class="col-lg-4 col-md-6">
                <div class="director-card">

                    <img src="{{ asset('Images/about_us/lemuel_espiritu.png') }}" alt="Director">

                    <div class="director-info">
                        <h3>Lemuel Espiritu</h3>
                        <p>National Sales & Operation Manager</p>
                    </div>

                </div>
            </div>

            <!-- Member -->
            <div class="col-lg-4 col-md-6">
                <div class="director-card">

                    <img src="{{ asset('Images/about_us/jiro_rojas.png') }}" alt="Director">

                    <div class="director-info">
                        <h3>Jiro Rojas</h3>
                        <p>National Marketing Manager</p>
                    </div>

                </div>
            </div>

            <!-- Member -->
            <div class="col-lg-4 col-md-6">
                <div class="director-card">

                    <img src="{{ asset('Images/about_us/generic.webp') }}" alt="Director">

                    <div class="director-info">
                        <h3>Christopher Beltran</h3>
                        <p>District Manager - VisMin</p>
                    </div>

                </div>
            </div>

            <!-- Member -->
            <div class="col-lg-4 col-md-6">
                <div class="director-card">

                    <img src="{{ asset('Images/about_us/connie_adefuin.png') }}" alt="Director">

                    <div class="director-info">
                        <h3>Connie Adefuin</h3>
                        <p>Finance Manager</p>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>