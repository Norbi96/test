<html>
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
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    </head>
<body>
      <!-- Google Tag Manager (noscript) -->
      <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P4SFKRMV"
        height="0" width="0" style="display:none;visibility:hidden"></iframe>
     </noscript>
  <!-- End Google Tag Manager (noscript) -->
<!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white">
  <!--
    Mobile menu

    Off-canvas menu for mobile, show/hide based on off-canvas menu state.
  -->
  <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
    <!--
      Off-canvas menu backdrop, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-black bg-opacity-25"></div>

    <div class="fixed inset-0 z-40 flex">
      <!--
        Off-canvas menu, show/hide based on off-canvas menu state.

        Entering: "transition ease-in-out duration-300 transform"
          From: "-translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "-translate-x-full"
      -->
      <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
        <div class="flex px-4 pt-5 pb-2">
          <button type="button" class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
            <span class="sr-only">Close menu</span>
            <!-- Heroicon name: outline/x-mark -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <!-- Links -->
        <div class="mt-2">
          <div class="border-b border-gray-200">
            <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
              <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
              <button id="tabs-1-tab-1" class="text-gray-900 border-transparent flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium" aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>

              <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
              <button id="tabs-1-tab-2" class="text-gray-900 border-transparent flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium" aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
            </div>
          </div>

          <!-- 'Women' tab panel, show/hide based on tab state. -->
          <div id="tabs-1-panel-1" class="space-y-10 px-4 pt-10 pb-8" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
            <div class="grid grid-cols-2 gap-x-4">
              <div class="group relative text-sm">
                <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center">
                </div>
                <a href="#" class="mt-6 block font-medium text-gray-900">
                  <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                  New Arrivals
                </a>
                <p aria-hidden="true" class="mt-1">Shop now</p>
              </div>

              <div class="group relative text-sm">
                <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-cover object-center">
                </div>
                <a href="#" class="mt-6 block font-medium text-gray-900">
                  <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                  Basic Tees
                </a>
                <p aria-hidden="true" class="mt-1">Shop now</p>
              </div>
            </div>

            <div>
              <p id="women-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
              <ul role="list" aria-labelledby="women-clothing-heading-mobile" class="mt-6 flex flex-col space-y-6">
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Dresses</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Denim</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                </li>
              </ul>
            </div>

            <div>
              <p id="women-accessories-heading-mobile" class="font-medium text-gray-900">Accessories</p>
              <ul role="list" aria-labelledby="women-accessories-heading-mobile" class="mt-6 flex flex-col space-y-6">
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                </li>
              </ul>
            </div>

            <div>
              <p id="women-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
              <ul role="list" aria-labelledby="women-brands-heading-mobile" class="mt-6 flex flex-col space-y-6">
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Significant Other</a>
                </li>
              </ul>
            </div>
          </div>

          <!-- 'Men' tab panel, show/hide based on tab state. -->
          <div id="tabs-1-panel-2" class="space-y-10 px-4 pt-10 pb-8" aria-labelledby="tabs-1-tab-2" role="tabpanel" tabindex="0">
            <div class="grid grid-cols-2 gap-x-4">
              <div class="group relative text-sm">
                <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                  <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg" alt="Drawstring top with elastic loop closure and textured interior padding." class="object-cover object-center">
                </div>
                <a href="#" class="mt-6 block font-medium text-gray-900">
                  <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                  New Arrivals
                </a>
                <p aria-hidden="true" class="mt-1">Shop now</p>
              </div>

              <div class="group relative text-sm">
                <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                  <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg" alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt." class="object-cover object-center">
                </div>
                <a href="#" class="mt-6 block font-medium text-gray-900">
                  <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                  Artwork Tees
                </a>
                <p aria-hidden="true" class="mt-1">Shop now</p>
              </div>
            </div>

            <div>
              <p id="men-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
              <ul role="list" aria-labelledby="men-clothing-heading-mobile" class="mt-6 flex flex-col space-y-6">
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                </li>
              </ul>
            </div>

            <div>
              <p id="men-accessories-heading-mobile" class="font-medium text-gray-900">Accessories</p>
              <ul role="list" aria-labelledby="men-accessories-heading-mobile" class="mt-6 flex flex-col space-y-6">
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                </li>
              </ul>
            </div>

            <div>
              <p id="men-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
              <ul role="list" aria-labelledby="men-brands-heading-mobile" class="mt-6 flex flex-col space-y-6">
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                </li>

                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="space-y-6 border-t border-gray-200 py-6 px-4">
          <div class="flow-root">
            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Viktor</a>
          </div>

          <div class="flow-root">
            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Store</a>
          </div>
        </div>

        <div class="space-y-6 border-t border-gray-200 py-6 px-4">
          <div class="flow-root">
            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Bejelentkezés</a>
          </div>
          <div class="flow-root">
            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Regisztráció</a>
          </div>
        </div>

        <div class="border-t border-gray-200 py-6 px-4">
          <a href="#" class="-m-2 flex items-center p-2">
            <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt="" class="block h-auto w-5 flex-shrink-0">
            <span class="ml-3 block text-base font-medium text-gray-900">CAD</span>
            <span class="sr-only">, change currency</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <header class="relative bg-white">
    <p class="flex h-10 items-center justify-center bg-indigo-600 px-4 text-sm font-medium text-white sm:px-6 lg:px-8">Ha visszalépnél, <a href="/social"> Kattints ide! </a></p>

    <nav aria-label="Top" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="border-b border-gray-200">
        <div class="flex h-16 items-center">
          <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
          <button type="button" class="rounded-md bg-white p-2 text-gray-400 lg:hidden">
            <span class="sr-only">Open menu</span>
            <!-- Heroicon name: outline/bars-3 -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>

          <!-- Logo -->
          <div class="ml-4 flex lg:ml-0">
            <a href="#">
              <span class="sr-only">Your Company</span>
              <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
          </div>

          <!-- Flyout menus -->
          <div class="hidden lg:ml-12 lg:block lg:self-stretch">
            <div class="flex h-full space-x-8">
              <div class="flex">




              <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Viktor</a>

              <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Store</a>
            </div>
          </div>

          <div class="ml-auto flex items-center">
            <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
              <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Bejelentkezés</a>
              <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
              <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Regisztráció</a>
            </div>

            <div class="hidden lg:ml-8 lg:flex">
              <a href="#" class="flex items-center text-gray-700 hover:text-gray-800">
                <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt="" class="block h-auto w-5 flex-shrink-0">
                <span class="ml-3 block text-sm font-medium">CAD</span>
                <span class="sr-only">, change currency</span>
              </a>
            </div>

            <!-- Search -->
            <div class="flex lg:ml-6">
              <a href="#" class="p-2 text-gray-400 hover:text-gray-500">
                <span class="sr-only">Search</span>
                <!-- Heroicon name: outline/magnifying-glass -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
              </a>
            </div>

            <!-- Cart -->
            <div class="ml-4 flow-root lg:ml-6">
              <a href="#" class="group -m-2 flex items-center p-2">
                <!-- Heroicon name: outline/shopping-bag -->
                <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
                <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                <span class="sr-only">items in cart, view bag</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
</div>







<!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white">
  <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Legtöbbet vásárolt kategória</h2>

    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">




@foreach ($productcategory as $kategoria)
      <div class="group relative">
        <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
          <img src="/images/{{ $kategoria->image }}" alt="Termék" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                {{ $kategoria->name }}
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Termékkategória</p>
          </div>
          <p class="text-sm font-medium text-gray-900">Megtekintés</p>
        </div>
      </div>
      <!-- More products... -->
@endforeach





    </div>
  </div>
</div>



















</body>
</html>
