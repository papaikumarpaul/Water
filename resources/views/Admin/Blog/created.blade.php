@extends('Admin.Layouts.app')
@section('title','Admin Blog')
@section('content')
<div class="container" >
    <div class="page-inner ">
        <div class="row">
          <div class="col-md-12 page-large ">
            <div class="card">
              <div class="card-header d-flex justify-content-md-between align-items-center">
                <h4 class="card-title">Blog/Created</h4>
                 <a href="{{route('admin.blogs')}}">
                  <button type="button" class="btn btn-primary  created-Blog-button">Back</button>
                 </a>
              </div>
             
            </div>
          </div>
         
        </div>
      </div>
       <!-- Success or Error Message -->
    @if(session('Message'))
    <div class="alert alert-success">
        {{ session('Message') }}
    </div>
@elseif($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card mb-25 border-0 rounded-0 bg-white add-product-box">
    <div class="card-body p-15 p-sm-20 p-md-25 p-lg-30 letter-spacing">
      <form method="POST" action="{{route('admin.store')}}"enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-12">
            <div class="form-group mb-15 mb-sm-20 mb-md-25">
              <label class="d-block text-black fw-semibold mb-10"
                >Title</label
              >
              <input
                type="text"
                class="form-control shadow-none rounded-0 text-black"
                placeholder="title"
                name="title"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mb-15 mb-sm-20 mb-md-25">
              <label class="d-block text-black fw-semibold mb-10"
                >Slug</label
              >
              <input
                type="text"
                class="form-control shadow-none rounded-0 text-black"
                placeholder="slug"
                name="slug"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mb-15 mb-sm-20 mb-md-25">
              <label class="d-block text-black fw-semibold mb-10">
               Image Uploade
              </label>
              <input
                type="file"
                class="form-control shadow-none rounded-0 text-black"
                placeholder="image"
                name="image"
              />
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group mb-15 mb-sm-20 mb-md-25">
              <label class="d-block text-black fw-semibold mb-10">
                Product Description
              </label>
              <textarea name="details" id="summernote" class="form-control"></textarea>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mb-15 mb-sm-20 mb-md-25">
              <label class="d-block text-black fw-semibold mb-10"
                >Tags</label
              >
              <input
                type="text"
                class="form-control shadow-none rounded-0 text-black"
                placeholder="Tags"
                name="tags"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mb-15 mb-sm-20 mb-md-25">
              <label class="d-block text-black fw-semibold mb-10"
                >Meta Tags</label
              >
              <input
                type="text"
                class="form-control shadow-none rounded-0 text-black"
                placeholder="meta tags"
                name="metatags"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mb-15 mb-sm-20 mb-md-25">
              <label class="d-block text-black fw-semibold mb-10"
                >Meta Title</label
              >
              <input
                type="text"
                class="form-control shadow-none rounded-0 text-black"
                placeholder="meta_title"
                name="metatitle"
              />
            </div>
          </div>
         
          <div class="col-md-6">
            <div class="form-group mb-15 mb-sm-20 mb-md-25">
              <label class="d-block text-black fw-semibold mb-10"
                >Meta Description</label
              >
              <input
                type="text"
                class="form-control shadow-none rounded-0 text-black"
                placeholder="meta description"
                name="metadescription"
              />
            </div>
          </div>
          
         
          <div class="col-md-12">
            <button
              class="btn btn-primary  border-0 fw-medium text-white pt-10 pb-10 ps-25 pe-25 pt-md-11 pb-md-11 ps-md-35 pe-md-35 rounded-1 fs-md-15 fs-lg-16"
              type="submit"
            >
              Create Blog
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
