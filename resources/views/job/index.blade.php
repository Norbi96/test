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
      <!-- job-area-start -->
      <div class="job-area pt-130 pb-130">
         <div class="container">
            <div class="row justify-content-center mb-80">
               <div class="col-10 p-0 text-center">
                  <div class="tp-project-tab-button masonary-menu">
                     <button class="active" data-filter="*"><span>Összes</span></button>
                     <button data-filter=".catweb"><span>IT - Webfejlesztés</span></button>
                     <button data-filter=".catren"><span>IT - Rendszerüzemeltetés</span></button>
                     <button data-filter=".catfem"><span>Fémipar</span></button>
                  </div>
               </div>
            </div>
            <div class="row grid">

            @foreach ($munkak as $munka)
               <div class="col-xl-3 grid-item cat{{ $munka->jobplace }}">
                  <div class="jobitem mb-30">
                     <div class="jobitem__brand">
                        <img src="images/gynlogo.png" alt="">
                     </div>
                     <div class="jobitem__title">
                        <h4 class="job-title-sm"><a href="{{ route('job.show',$munka->id) }}">{{ $munka->name }}</a></h4>
                     </div>
                     <div class="jobitem__details">
                        <p class="mb-0"><i class="fal fa-map-marker-alt"></i> Pécs</p>
                        <p class="mb-0"><i class="fal fa-clock"></i> Teljes munkaidő</p>
                     </div>
                     <div class="jobitem__button">
                        <a href="{{ route('job.show',$munka->id) }}"><button class="tp-btn-border-sm">Érdeklődöm</button></a>
                     </div>
                  </div>
               </div>
            @endforeach

            <p class="text-center">Jelenleg nincs nyitott pozíciónk, de érdeklődés esetén fényképes szakmai önéletrajzát várjuk a karrier@gyapinet.hu e-mail címre!</p>

            </div>
         </div>
      </div>
      <!-- job-area-end -->
   </main>

   @include('components.footer')
