@extends('Frontend.layouts.Main')
@section('title', 'Blogs')
@section('main-container')
            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our News & Blog</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Our Company</a></li>
                        <li class="breadcrumb-item active text-primary">News & Blog</li>
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

        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-uppercase text-primary">Our Blog</h4>
                    <h1 class="display-3 text-capitalize mb-3">Latest Blog & News</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach ($blogs as $item)
                    <div class="col-lg-6 col-xl-4 mb-4 d-flex align-items-stretch wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card blog-item">
                            <div class="blog-img">
                                <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid rounded-top w-100" alt="Blog Image">
                                <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> {{ $item->created_at->format('M d Y') }}</div>
                            </div>
                            <div class="card-body blog-content d-flex flex-column">
                                <a href="{{ route('blog.show',$item->slug)}}" class="h4 d-inline-block mb-3">{{ $item->title }}</a>
                                <p class="flex-grow-1">{{ \Illuminate\Support\Str::words(strip_tags($item->details), 15, '...') }}</p>
                                <a href="{{ route('blog.show',$item->slug)}}" class="fw-bold text-secondary mt-auto">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        <!-- Blog End -->
@endsection