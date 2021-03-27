<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  @include('frontend.layouts.css')

  </head>

<body>


  <!-- ======= Header ======= -->

 @include('frontend.layouts.navbar')

  <!-- ======= Hero Section ======= -->

 @include('frontend.layouts.hero')

  <main id="main">

    <!-- ======= Cliens Section ======= -->
 @include('frontend.layouts.component.client')

    <!-- ======= About Us Section ======= -->

 @include('frontend.layouts.component.about')

    <!-- ======= Why Us Section ======= -->
 @include('frontend.layouts.component.motive')


    <!-- ======= Skills Section ======= -->

 @include('frontend.layouts.component.skills')

    <!-- ======= Services Section ======= -->
 @include('frontend.layouts.component.service')

  
    <!-- ======= Cta Section ======= -->
 @include('frontend.layouts.component.cta')


    <!-- ======= Portfolio Section ======= -->
 @include('frontend.layouts.component.portfolio')
   

    <!-- ======= Team Section ======= -->
 @include('frontend.layouts.component.team')
   

    <!-- ======= Pricing Section ======= -->
 @include('frontend.layouts.component.price')
    

    <!-- ======= Frequently Asked Questions Section ======= -->
 @include('frontend.layouts.component.asq')
   

    <!-- ======= Contact Section ======= -->
 @include('frontend.layouts.component.contact')
   

  </main><!-- End #main -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

 @include('frontend.layouts.js')

</body>

</html>