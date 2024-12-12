@extends('Frontend.layouts.Main')
@section('title', '$blog->title')
@section('main-container')
  <!-- Header Start -->
  <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{$blog->title}}</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active text-primary">Blogs</li>
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
        <div class="container-fluid contact bg-light py-5 d-flex justify-content-center">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-12 h-100 wow fadeInUp" data-wow-delay="0.2s">
                       {{-- <div>
                        <img src="{{ asset('storage/' . $blog->image) }}"  id="blog-image-1"class="img-fluid rounded w-100 " alt="Blog Image">
                        <a class="blog-date px-4 py-3 d-inline-block"><i class="fa fa-calendar-alt me-1"></i> {{ $blog->created_at->format('M d Y') }}</a>
                       </div> --}}
                       <div class="mt-md-5">
                        <a  class="h4 d-inline-block mb-3">{{ $blog->title }}</a>
                        <p class="flex-grow-1">{{(strip_tags($blog->details)) }}</p>
                       </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Contact End -->
        @endsection
      <style>
            #blog-image-1{
                height: 500px;
                width: 70%;
                object-fit: cover;
            }
            </style>
          
        
