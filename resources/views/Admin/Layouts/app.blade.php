<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    {{-- <script src="{{url('./admin/assets/js/plugin/webfont/webfont.min.js')}}"></script> --}}
    {{-- <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script> --}}

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{url('./admin/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('./admin/css/plugins.min.css')}}" />
    {{-- <link rel="stylesheet" href="{{url('./admin/css/kaiadmin.min.css')}}" /> --}}

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{url('./admin/css/demo.css')}}" />
    {{-- <script src="{{url('./admin/assets/js/plugin/webfont/webfont.min.js')}}"></script> --}}
    {{-- <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script> --}}

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{url('./admin/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('./admin/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{url('./admin/css/kaiadmin.min.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{url('./admin/css/demo.css')}}" />
    >
    @stack('style')
</head>
<body class="bg-light">

    <!-- Navbar (optional) -->
    @include('Admin.Layouts.sidebar')
   @include('Admin.Layouts.header')
   <div class="Container-page">
    @yield('content')
   </div>
   
    
   @include('Admin.Layouts.footer')
    <!-- Add Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
    <script>
      $(document).ready(function() {
  $('#summernote').summernote();
});
    </script>
    @stack('script')
    
</body>
</html>
<style>
  .main-panel {
    CONTAIN-INTRINSIC-BLOCK-SIZE: AUTO 100PX;
    position: relative;
    width: calc(100% - 265px);
    height: 0px;
    min-height: 0%;
    float: right;
    transition: all .3s;
}
*, ::after, ::before {
    box-sizing: border-box;
}
.Container-page{
  margin-left: 250px; 
  width:83%;

}
.Container-page .page-large{
  margin-top: 30px;
}
.created-Blog-button{
  font-weight: 600;
  font-family:'Poppines';
  font-size: 18px;
  border-radius: 10px;
}
.add-product-box{
  width: 100%;
}
</style>
