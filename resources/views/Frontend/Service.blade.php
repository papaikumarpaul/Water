@extends('Frontend.layouts.Main')
@section('title', 'Service')
@section('main-container')

            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">Service</li>
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

        <!-- Service Start -->
        <div class="container-fluid service bg-light overflow-hidden py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-uppercase text-primary">Our Service</h4>
                    <h1 class="display-3 text-capitalize mb-3">Protect Your Family with Best Water</h1>
                </div>
                <div class="row gx-0 gy-4 align-items-center">
                    <div class="col-lg-6 col-xl-4 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="service-item rounded p-4 mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="service-content text-end">
                                            <a href="#" class="h4 d-inline-block mb-3">Residential Waters</a>
                                            <p class="mb-0">Providing pure drinking water solutions for homes and families.
                                            </p>
                                        </div>
                                        <div class="ps-4">
                                            <div class="service-btn"><i class="fas fa-hand-holding-water text-white fa-2x"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-item rounded p-4 mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="service-content text-end">
                                            <a href="#" class="h4 d-inline-block mb-3">Commercial Waters</a>
                                            <p class="mb-0">Supplying high-quality water for businesses, offices, and industries.
                                            </p>
                                        </div>
                                        <div class="ps-4">
                                            <div class="service-btn"><i class="fas fa-dumpster-fire text-white fa-2x"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-item rounded p-4 mb-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="service-content text-end">
                                            <a href="#" class="h4 d-inline-block mb-3">Filtration Plants</a>
                                            <p class="mb-0">Designing and operating efficient water filtration systems.
                                            </p>
                                        </div>
                                        <div class="ps-4">
                                            <div class="service-btn"><i class="fas fa-filter text-white fa-2x"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="bg-transparent">
                            <img src="{{url('./frontend/img/500ml.webp')}}" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="service-item rounded p-4 mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="service-btn"><i class="fas fa-assistive-listening-systems text-white fa-2x"></i></div>
                                        </div>
                                        <div class="service-content">
                                            <a href="#" class="h4 d-inline-block mb-3">Water Softening</a>
                                            <p class="mb-0">Offering solutions to reduce water hardness and improve its quality.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-item rounded p-4 mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="service-btn"><i class="fas fa-recycle text-white fa-2x"></i></div>
                                        </div>
                                        <div class="service-content">
                                            <a href="#" class="h4 d-inline-block mb-3">Market Research</a>
                                            <p class="mb-0">Analyzing market trends and consumer needs to drive business growth.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-item rounded p-4 mb-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="service-btn"><i class="fas fa-project-diagram text-white fa-2x"></i></div>
                                        </div>
                                        <div class="service-content">
                                            <a href="#" class="h4 d-inline-block mb-3">Project Planning</a>
                                            <p class="mb-0">Developing comprehensive project plans to ensure timely and successful execution.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

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
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">456</span>
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
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">513</span>
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
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">53</span>
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
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">17</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Counter -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-uppercase text-primary">Testimonials</h4>
                    <h1 class="display-3 text-capitalize mb-3">Our clients reviews.</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                    <div class="testimonial-item text-center p-4">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
                        </p>
                        <div class="d-flex justify-content-center mb-4">
                            <img src="{{url('./frontend/img/testimonial-1.jpg')}}" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                        </div>
                        <div class="d-block">
                            <h4 class="text-dark">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center p-4">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
                        </p>
                        <div class="d-flex justify-content-center mb-4">
                            <img src="{{url('./frontend/img/testimonial-2.jpg')}}" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                        </div>
                        <div class="d-block">
                            <h4 class="text-dark">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center p-4">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
                        </p>
                        <div class="d-flex justify-content-center mb-4">
                            <img src="img/testimonial-3.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                        </div>
                        <div class="d-block">
                            <h4 class="text-dark">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center p-4">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
                        </p>
                        <div class="d-flex justify-content-center mb-4">
                            <img src="{{url('./frontend/img/testimonial-3.jpg')}}" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                        </div>
                        <div class="d-block">
                            <h4 class="text-dark">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
@endsection