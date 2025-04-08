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

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner" style="width:100%; height: 649px;">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/Lux12.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-row align-items-center justify-content-end">
                    <div class="mx-auto" style="width: 1000px;">
                        <h3 class="text-white text-uppercase mb-3 animated slideInDown"><b>Revolutionize with Our Game-Changing Solutions</b></h3>
                        <h2 class="display-8 text-white mb-md-4 animated zoomIn">Embark on a journey of innovation with our state of the art software solutions. Tested and proven, our cutting-edge products set new standards for excellence. Acclaimed for their brilliance, our award-winning services bring authenticity and reliability to the forefront. Experience the power of advanced technology that not only excels but is also within reach.</h2>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/47.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-row align-items-center justify-content-end">
                    <div class="mx-auto" style="width: 1000px;">
                    <h3 class="text-white text-uppercase mb-3 animated slideInDown"><b>Empower Progress with Our Innovative Software Tools</b></h3>
                        <h2 class="display-8 text-white mb-md-4 animated zoomIn">Ignite innovation with our pioneering software platforms. With a proven track record of success, our tools are crafted to lead and inspire. Recognized for outstanding achievement, we bring clarity, confidence, and efficiency to every project. Access the future engineered for now.</h2>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-row align-items-center justify-content-end">
                    <div class="mx-auto" style="width: 1000px;">
                    <h3 class="text-white text-uppercase mb-3 animated slideInDown"><b>Disrupt the Norm with Our Next-Level Solutions</b></h3>
                        <h2 class="display-8 text-white mb-md-4 animated zoomIn">Fuel your growth with transformative software designed for modern challenges. Validated by results and trusted by professionals, our solutions are more than tools, they’re a new standard. Renowned for excellence, our services deliver both strength and simplicity. The future of tech is here and it’s ready for you.</h2>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/4.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-row align-items-center justify-content-end">
                    <div class="mx-auto" style="width: 1000px;">
                    <h3 class="text-white text-uppercase mb-3 animated slideInDown"><b>Lead the Change with Our Cutting-Edge Technology</b></h3>
                        <h2 class="display-8 text-white mb-md-4 animated zoomIn">Unleash potential with cutting-edge digital solutions engineered for excellence. Rigorously tested and widely trusted, our technology sets benchmarks in performance and quality. Honored across the industry, our services embody precision and dependability. Embrace a smarter tomorrow made accessible today.</h2>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
