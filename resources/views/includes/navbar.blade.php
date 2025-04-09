<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="{{ route('home') }}" class="navbar-brand p-0">
            <h1 class="m-0"><img src="img/logo.png" alt="Company Logo" width="50" height="50">Learnsoft Beliotech Solutions</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                <a href="{{ route('product') }}" class="nav-item nav-link">Products</a>
                <a href="{{ route('service') }}" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Resources</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('testimonial') }}" class="dropdown-item">Testimonial</a>
                        <a href="{{ route('client') }}" class="dropdown-item">Top Clients</a>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            <button type="button" class="btn btn-primary py-2 px-4 ms-3" data-bs-toggle="modal" data-bs-target="#demoModal">
    Access Demo
</button>
        </div>
    </nav>
</div>
