<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arsha Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('frontend.layouts.css')

</head>

<body>

  <!-- ======= Header ======= -->
  @include('frontend.layouts.navbar')

  @yield('content')

  <!-- ======= Footer ======= -->
  @include('frontend.layouts.footer')

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  @include('frontend.layouts.js')

</body>

</html>