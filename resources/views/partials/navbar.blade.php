<!-- Navbar Start -->
<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="index.html" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-4 text-uppercase text-white">CAFE</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                <a href="/" class="nav-item nav-link {{ Route::is('home') ? 'active' : '' }}">Home</a>
                <a href="/about" class="nav-item nav-link {{ Route::is('about') ? 'active' : '' }}">About</a>
                <a href="/service" class="nav-item nav-link {{ Route::is('service') ? 'active' : '' }}">Service</a>
                <a href="/menu" class="nav-item nav-link {{ Route::is('menu') ? 'active' : '' }}">Menu</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Route::is('reservation') || Route::is('testimonials') ? 'active' : '' }}" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="/reservation" class="dropdown-item {{ Route::is('reservation') ? 'active' : '' }}">Reservation</a>
                        <a href="/testimonial" class="dropdown-item {{ Route::is('testimonial') ? 'active' : '' }}">Testimonial</a>
                    </div>
                </div>
                <a href="/contact" class="nav-item nav-link {{ Route::is('contact') ? 'active' : '' }}">Contact</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->