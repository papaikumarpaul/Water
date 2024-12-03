@extends('Frontend.layouts.Main')
@section('title', 'Product')
@section('main-container')

            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Products</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">Product</li>
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

        <!-- Products Start -->
        <div class="container-fluid product py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-uppercase text-primary">Our Products</h4>
                    <h1 class="display-3 text-capitalize mb-3">We Deliver Best Quality Bottle Packs.</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="product-item">
                            <img src="{{url('./frontend/img/product-3.png')}}" class="img-fluid w-100 rounded-top"  alt="Image">
                            <div class="product-content bg-light text-center rounded-bottom p-4">
                                <p>2L 1 Bottle</p>
                                <a href="#" class="h4 d-inline-block mb-3">Mineral Water Bottle</a>
                                <p class="fs-4 text-primary mb-3">$35:00</p>
                                <a href="#" class="btn btn-secondary rounded-pill py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="product-item">
                            <img src="{{url('./frontend/img/product-2.png')}}" class="img-fluid w-100 rounded-top"  alt="Image">
                            <div class="product-content bg-light text-center rounded-bottom p-4">
                                <p>4L 2 Bottles</p>
                                <a href="#" class="h4 d-inline-block mb-3">RO Water Bottle</a>
                                <p class="fs-4 text-primary mb-3">$70:00</p>
                                <a href="#" class="btn btn-secondary rounded-pill py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="product-item">
                            <img src="{{url('./frontend/img/product-1.png')}}" class="img-fluid w-100 rounded-top"  alt="Image">
                            <div class="product-content bg-light text-center rounded-bottom p-4">
                                <p>6L 3 Bottles</p>
                                <a href="#" class="h4 d-inline-block mb-3">UV Water Bottle</a>
                                <p class="fs-4 text-primary mb-3">$100:00</p>
                                <a href="#" class="btn btn-secondary rounded-pill py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Products End -->
        @endsection
      