@include('components.full_head')
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
      <!--job-details-area-start -->
      <div class="job-details-info pt-140 pb-70">
         <div class="container">
            <div class="row">
               <div class="col-xl-12  col-lg-12">
                  <div class="jobdetails">
                     <div class="jobdetails__subtitle">
                        <h5 class="jb-subtitle">Ongoing</h5>
                     </div>
                     <div class="jobdetails__title">
                        <h4 class="job-title pb-10">{{ $munkak->name }}</h4>
                        <span>ÁLLÁSHIRDETÉS</span>
                     </div>
                     <div class="jobdetails__paragraph">
                        <p>
                             {!! $munkak->description_long !!}
                        </p>
                     </div>
                     <div class="jobdetails__title">
                        <h4 class="job-title pb-15">Jelentkezés menete</h4>
                     </div>
                     <div class="jobdetails__paragraph">
                        <p>
                            Küldje el fényképes szakmai önéletrajzát a carrier@gyapinet.hu e-mail címre!
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--job-details-area-end -->

   </main>

   <!-- footer-area-start -->

   @include('components.footer')

   <!-- footer-area-end -->

   <button class="scroll-top scroll-to-target" data-target="html">
      <i class="far fa-angle-double-up"></i>
  </button>

   <!-- JS here -->

</body>

</html>
