<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Max Water - @yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{url('./frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{url('./frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
            

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{url('./frontend/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{url('./frontend/css/style.css')}}" rel="stylesheet">
        <style>
            .feature-item{
                height: 100%;
            }
        </style>
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{url('/')}}" class="navbar-brand p-0">
                    {{-- <h1 class="text-primary"><i class="fas fa-hand-holding-water me-3"></i>Acuas</h1> --}}
                    <img  src="{{url('./frontend/img/Max Waterv Logo.png')}}" alt="Logo" width="200"> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{url('/')}}" class="nav-item nav-link ">Home</a>
                        <a href="{{url('/about-us')}}" class="nav-item nav-link">About Us</a>
                        <a href="{{url("/our-product")}}" class="nav-item nav-link">Our Product</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Company</a>
                            <div class="dropdown-menu m-0">
                                 <a href="{{url('/our-service')}}" class="dropdown-item">Our Service</a>
                                <a href="{{url('/our-team')}}" class="dropdown-item">Our Team</a>
                                <a href="{{url('/our-partner')}}" class="dropdown-item">Our Partners</a>
                                <a href="{{url("/testimonial")}}" class="dropdown-item">Testimonial</a>
                                <a href="{{url("/blog")}}" class="dropdown-item">Blog</a>  
                                <a href="{{url("/list-your-ads")}}" class="dropdown-item">List A Ads</a>                               

                            </div>
                        </div>
                        <a href="{{url("/contact")}}" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="d-none d-xl-flex me-3">
                        <div class="d-flex flex-column pe-3 border-end border-primary">
                            <span class="text-body">Get Free Delivery</span>
                            <a href="tel:+4733378901"><span class="text-primary">Free: +91-6204356763</span></a>
                        </div>
                    </div>

                    <a href="https://wa.me/+916204356763" class="btn btn-primary rounded-pill d-inline-flex flex-shrink-0 py-2 px-4">Order Now</a>
                </div>
            </nav>

           
        <!-- Modal Search End -->