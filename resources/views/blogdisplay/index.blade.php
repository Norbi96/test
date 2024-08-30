<!doctype html>
<html class="no-js" lang="zxx">

<head>
         <!-- Google Tag Manager -->
         <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                  })(window,document,'script','dataLayer','GTM-P4SFKRMV');
         </script>
         <!-- End Google Tag Manager -->
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title> Gyapinet Bt.</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/css/swiper-bundle.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/flaticon.css">
   <link rel="stylesheet" href="assets/css/meanmenu.css">
   <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/spacing.css">
   <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
         <!-- Google Tag Manager (noscript) -->
         <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P4SFKRMV"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
         </noscript>
      <!-- End Google Tag Manager (noscript) -->
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

     <!-- tp-header-area-start -->
     @include('starting.header');
   <!-- tp-header-area-end -->


   <div class="body-overlay"></div>

<main>
<!--blog-grid-area-start -->
<div class="tp-blog-area pt-130 pb-130">
    <div class="container">
       <div class="row gx-6">

        @foreach ($bejegyzesek as $bejegyzes)
          <div class="col-xl-4 col-md-6 mb-80 tp-blog-border wow tpfadeUp" data-wow-duration=".3s" data-wow-delay=".6s">
             <div class="tp-blog-item-three">
                <div class="tp-blog-item-three__img fix">
                   <a href="{{ route('blogview.index',$bejegyzes->id) }}"><img class="w-100" src="/images/{{ $bejegyzes->image }}" alt=""></a>
                   {{-- <a href="#"><img class="w-100" src="assets/img/blog-post/blog-post-sm-1.jpg" alt=""></a> --}}
                   {{-- 390x240 -es kép áll neki jól! --}}
                </div>
                <div class="tp-blog-item-three__content">
                   <div class="tp-blog-item-three__meta pt-25 pb-15">
                      <a href="{{ route('blogview.index',$bejegyzes->id) }}">{{ $bejegyzes->name }}</a>
                      <a class="tp-meta-text" href="{{ route('blogview.index',$bejegyzes->id) }}"><i class="fal fa-calendar-alt"></i> {{ $bejegyzes->created_at }}</a>
                   </div>
                   <div class="tp-blog-item-three__button">
                      <a class="tp-btn-grey-sm" href="{{ route('blogview.index',$bejegyzes->id) }}">Tovább</a>
                   </div>
                </div>
             </div>
          </div>
        @endforeach


       </div>
    </div>
 </div>
 <!-- blog-grid-area-end -->

   </main>


   @include('components.footer')

