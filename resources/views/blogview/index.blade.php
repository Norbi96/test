@include('components.full_head')
<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

     <!-- tp-header-area-start -->
     @include('starting.header');
     <!-- tp-header-area-end -->
   <div class="body-overlay"></div>

   <main>
      <!-- postbox area start -->
      <div class="postbox__area pt-120 pb-120">
         <div class="container">
            <div class="row">
               <div class="col-xxl-8 col-xl-8 col-lg-8 col-12">
                  <div class="postbox__wrapper">
                     <article class="postbox__item format-image transition-3">
                        <div class="postbox__content">
                           <p><img class="w-100" src="/images/{{ $bejegyzes->image2 }}" alt=""></p>
                           {{-- <p><img class="w-100" src="../assets/img/blog-details/blog-big-1.jpg" alt=""></p> --}}
                           <div class="postbox__meta">
                              <span><a href="#"><i class="fal fa-user-circle"></i> Admin </a></span>
                              <span><a href="#"><i class="fal fa-clock"></i> {{ $bejegyzes->created_at}}</a></span>
                           </div>
                           <h3 class="postbox__title">
                            {{ $bejegyzes->name }}
                           </h3>
                           <div class="postbox__text">
                              <p>{!! $bejegyzes->content !!}</p>
                           </div>

                           <div class="postbox__thumb2">
                              {{-- <div class="row gx-50">
                                 <div class="col-xl-6">
                                    <p><img src="../assets/img/blog-details/blog-big-4.jpg" alt=""></p>
                                 </div>
                                 <div class="col-xl-6">
                                    <p><img src="../assets/img/blog-details/blog-sm-5.jpg" alt=""></p>
                                 </div>
                              </div> --}}
                           </div>
                        </div>
                     </article>
                     <div class="postbox__comment-form">
                        <div class="col-xl-6 col-lg-12">
                            <div class="postbox__tag tagcloud">
                               <a href="#">Blog</a>
                               <a href="#">IT</a>
                               <a href="#">Innováció</a>
                            </div>
                         </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-4">
                  <div class="sidebar__wrapper">
                     <div class="sidebar__widget mb-40">
                        <h3 class="sidebar__widget-title">Megoldásaink</h3>
                        <div class="sidebar__widget-content">
                           <ul>
                              <li><a href="../uzemeltetes">Rendszerintegráció, IT üzemeltetés<span></span></a></li>
                              <li><a href="../fejlesztes">Web és alkalmazásfejlesztés <span></span></a></li>
                              <li><a href="../IOT">IoT és beágyazott elektronika <span></span></a></li>
                              <li><a href="../factory">Gép és alkatrészgyártás <span></span></a></li>
                              <li><a href="../erp">Vállalatirányítási rendszer <span></span></a></li>
                              <li><a href="#">Gyártás és raktárkövetés <span></span></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="sidebar__widget mb-40">
                        <h3 class="sidebar__widget-title">Oldalak</h3>
                        <div class="sidebar__widget-content">
                           <ul>
                              <li><a href="../job">Karrier <span><i class="fal fa-angle-right"></i></span></a></li>
                              <li><a href="#">Ismerj meg minket <span><i class="fal fa-angle-right"></i></span></a></li>
                           </ul>
                        </div>
                     </div>
               </div>
            </div>
         </div>
      </div>
      <!-- postbox area end -->

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
