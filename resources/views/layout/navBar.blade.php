<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand" href="#"><img src="{{ asset('Images/Homepage/LOGO_WHITE-04.png') }}" alt="Natco Logo">
        </a>

        <!-- Hamburger -->
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Center Menu -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aboutUs') }}">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('natcoProducts') }}">Our Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ourFacilities') }}">Our Facilities</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>

            <!-- Search Bar -->
            <form class="d-flex" role="search">
                <input class="form-control me-2"
                       type="search"
                       placeholder="Search">

                <button class="btn btn-search"
                        type="submit">
                    Search
                </button>
            </form>

        </div>
    </div>
</nav>

<nav class="nav-tagline navbar-expand-lg custom-navbar">
    <div class="container">
        <p>"Making specialty medicines accessible to all"</p>
    </div>
</nav>