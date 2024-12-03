@extends('Frontend.layouts.Main')
@section('title', 'Supplier')
@section('main-container')
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Become a Supplier</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Become a Supplier</li>
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
        <!-- Contact Start -->
        <div class="container-fluid contact bg-light py-5">
            <div class="container py-5">
                <div class="row d-flex justify-content-center ">
                    <div class="col-lg-8 h-100 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                            <h4 class="text-uppercase text-primary">Let’s Connect</h4>
                            <h1 class="display-3 text-capitalize mb-3"> Become A Supplier</h1>
                            <p class="mb-0">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done.</p>
                        </div>
                        <form method="POST" action="{{route('stores')}}">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="name" name="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0" id="email" name="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="phone" class="form-control border-0" id="phone" name="number" placeholder="Phone">
                                        <label for="phone">Your Phone</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="subject" name="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0" placeholder="Leave a message here" name="message" id="message" style="height: 175px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    
@endsection