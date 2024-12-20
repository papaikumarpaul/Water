@extends('Frontend.layouts.Main')
@section('title', 'About')
@section('main-container')
            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                     
                        <li class="breadcrumb-item active text-primary">About</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text btn border p-3"><i class="fa fa-search text-white"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-img rounded h-100">
                            <img src="{{url('./frontend/img/about.jpg')}}" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="">
                            <div class="about-exp"><span>2+ Years Experiance</span></div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="about-item">
                            <h4 class="text-primary text-uppercase">About Us</h4>
                            <h1 class="display-3 mb-3">Pure Water, Pure Purpose</h1>
                            <p class="mb-4">At Max Water, we're committed to providing the purest, 
                                most refreshing water. Sourced from pristine natural springs, our water is free from contaminants and packed with essential minerals. We believe that hydration is 
                                essential for a healthy lifestyle, and we're dedicated to making it easy and enjoyable.
                            </p>
                            <div class="bg-light rounded p-4 mb-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="pe-4">
                                                <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-tint text-white fa-2x"></i></div>
                                            </div>
                                            <div class="">
                                                <a href="#" class="h4 d-inline-block mb-3">Satisfied Customer</a>
                                                <p class="mb-0">Our priority is customer satisfaction. We strive to deliver exceptional products and services.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-light rounded p-4 mb-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="pe-4">
                                                <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-faucet text-white fa-2x"></i></div>
                                            </div>
                                            <div class="">
                                                <a href="#" class="h4 d-inline-block mb-3">Standard Product</a>
                                                <p class="mb-0">Our products are made to the highest quality standards, ensuring durability and performance.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-secondary rounded-pill py-3 px-5">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Fact Counter -->
        <div class="container-fluid counter py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-item">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-thumbs-up fa-3x text-white"></i>
                            </div>
                            <h4 class="text-white my-4">Happy Clients</h4>
                            <div class="counter-counting">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">100</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="counter-item">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-truck fa-3x text-white"></i>
                            </div>
                            <h4 class="text-white my-4">Transport</h4>
                            <div class="counter-counting">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">10</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="counter-item">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-users fa-3x text-white"></i>
                            </div>
                            <h4 class="text-white my-4">Employees</h4>
                            <div class="counter-counting">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">5</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="counter-item">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-heart fa-3x text-white"></i>
                            </div>
                            <h4 class="text-white my-4">Years Experiance</h4>
                            <div class="counter-counting">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">2</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Counter -->

        <!-- feature Start -->
        <div class="container-fluid feature bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-uppercase text-primary">Our Feature</h4>
                    <h1 class="display-3 text-capitalize mb-3">Enhanced with Essential Minerals</h1>
                </div>
                <div class="row g-4">
                    <div class=" col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item p-4">
                            <div class="feature-icon mb-3"><i class="fas fa-hand-holding-water text-white fa-3x"></i></div>
                            <a class="h4 mb-3">Pure and Pristine</a>
                            <p class="mb-3">Sourced from pristine natural springs, Max Water offers the purest form of hydration, free from contaminants.</p>
                            {{-- <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item p-4">
                            <div class="feature-icon mb-3"><i class="fas fa-filter text-white fa-3x"></i></div>
                            <a  class="h4 mb-3">Eco-Friendly Packaging</a>
                            <p class="mb-3">Committed to sustainability, our bottles are made from recyclable materials, minimizing our environmental impact.</p>
                            {{-- <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item p-4">
                            <div class="feature-icon mb-3"><i class="fas fa-recycle text-white fa-3x"></i></div>
                            <a class="h4 mb-3">Hydration, Perfected</a>
                            <p class="mb-3">Stay hydrated and energized all day long with our perfectly balanced mineral content.</p>
                            {{-- <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-item p-4">
                            <div class="feature-icon mb-3"><i class="fas fa-microscope text-white fa-3x"></i></div>
                            <a class="h4 mb-3">Convenient and Portable</a>
                            <p class="mb-3">Our sleek, lightweight bottles are perfect for on-the-go hydration, wherever your adventures take you.</p>
                            {{-- <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature End -->
      @endsection
      