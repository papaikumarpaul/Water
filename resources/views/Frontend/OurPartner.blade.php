@extends('Frontend.layouts.Main')
@section('title', 'Partners')
@section('main-container')
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Partners</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Our Company</a></li>
            <li class="breadcrumb-item active text-primary">Our Partners</li>
        </ol>    
    </div>
</div>
<!-- Header End -->
</div>

  
   <div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Our Partners</h4>
            <h1 class="display-3 text-capitalize mb-3">A Trusted Name In Bottled Water Industry</h1>
        </div>
        <div class="row g-4">
            <div class=" col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4">
                    <img src="{{url('./frontend/img/cst-banner-2.jpg')}}" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="">
                    <a href="#" class="h4 mb-3">Steps Filtration</a>
                </div>
            </div>
            <div class=" col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4">
                    <img src="{{url('./frontend/img/cst-banner-2.jpg')}}" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="">
                    <a href="#" class="h4 mb-3">Steps Filtration</a>
                </div>
            </div>
            <div class=" col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4">
                    <img src="{{url('./frontend/img/cst-banner-2.jpg')}}" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="">
                    <a href="#" class="h4 mb-3">Steps Filtration</a>
                </div>
            </div>
            <div class=" col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4">
                    <img src="{{url('./frontend/img/cst-banner-2.jpg')}}" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="">
                    <a href="#" class="h4 mb-3">Steps Filtration</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- feature End -->
       
      
    
@endsection