<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro|Roboto&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" 
    integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />

    <nav class="flex items-center bg-black py-3 pr-2 lg:py-0 flex-wrap">
      <a href="{{ URL::route('site.home') }}" class="mr-4 inline-flex items-center">
        <span class="tracking-wide">
          <div class="dod-img-con overflow-hidden rounded-r-full h-16 w-48 p-0">
           {!! HTML::image('images/dod.png') !!}
          </div>
        </span>
      </a>


      <button
        class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler"
        data-target="#navigation">
        <i class="material-icons">menu</i>
      </button>



      <div class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto" id="navigation">
        <div class="lg:inline-flex lg:flex-row lg:mr-auto lg:w-auto w-full lg:items-center items-start  flex flex-col lg:h-auto">

          <a href="{{ URL::route('site.home') }}" class="{{ request()->is('/') ? 'active-link lg:inline-flex lg:w-auto w-full px-2 py-2 rounded-lg font-bold items-center justify-center hover:bg-gray-300 hover:text-red-500 text-white' : 'lg:inline-flex lg:w-auto w-full px-2 py-2 rounded-lg font-bold items-center justify-center hover:bg-gray-300 hover:text-red-500 text-white' }}">
            <span> HOME </span>
          </a>
          <span class="text-red-500 font-bold hidden lg:block">|</span>
          <a href="{{ URL::route('site.news') }}" class="{{ request()->is('news') ? 'active-link lg:inline-flex lg:w-auto w-full px-2 py-2 rounded-lg font-bold items-center justify-center hover:bg-gray-300 hover:text-red-500 text-white' : 'lg:inline-flex lg:w-auto w-full px-2 py-2 rounded-lg font-bold items-center justify-center hover:bg-gray-300 hover:text-red-500 text-white' }}">
            <span> NEWS </span>
          </a>
          <span class="text-red-500 font-bold hidden lg:block">|</span>
          <a href="{{ URL::route('site.events') }}" class="{{ request()->is('events') ? 'active-link lg:inline-flex lg:w-auto w-full px-2 py-2 rounded-lg font-bold items-center justify-center hover:bg-gray-300 hover:text-red-500 text-white' : 'lg:inline-flex lg:w-auto w-full px-2 py-2 rounded-lg font-bold items-center justify-center hover:bg-gray-300 hover:text-red-500 text-white' }}">
            <span> EVENT </span>
          </a>
          <span class="text-red-500 font-bold hidden lg:block">|</span>
          <a href="{{ URL::route('site.article') }}" class="{{ request()->is('article') ? 'active-link lg:inline-flex lg:w-auto w-full px-2 py-2 rounded-lg font-bold items-center justify-center hover:bg-gray-300 hover:text-red-500 text-white' : 'lg:inline-flex lg:w-auto w-full px-2 py-2 rounded-lg font-bold items-center justify-center hover:bg-gray-300 hover:text-red-500 text-white' }}">
            <span> ARTICLE </span>
          </a>
          <span class="text-red-500 font-bold hidden lg:block">|</span>
          <a href="{{ URL::route('site.dubaiexpo') }}" class="{{ request()->is('dubaiexpo') ? 'active-link lg:inline-flex lg:w-auto w-full px-2 py-2 rounded-lg font-bold items-center justify-center hover:bg-gray-300 hover:text-red-500 text-white' : 'lg:inline-flex lg:w-auto w-full px-2 py-2 rounded-lg font-bold items-center justify-center hover:bg-gray-300 hover:text-red-500 text-white' }}">
            <span> DUBAI EXPO </span>
          </a>
          <span class="text-red-500 font-bold hidden lg:block">|</span>
          <a href="{{ URL::route('site.video') }}" class="{{ request()->is('video') ? 'active-link lg:inline-flex lg:w-auto w-full px-2 py-2 rounded-lg font-bold items-center justify-center hover:bg-gray-300 hover:text-red-500 text-white' : 'lg:inline-flex lg:w-auto w-full px-2 py-2 rounded-lg font-bold items-center justify-center hover:bg-gray-300 hover:text-red-500 text-white' }}">
            <span> VIDEO </span>
          </a>
          <span class="text-red-500 font-bold hidden lg:block">|</span>
          <a href="#directory" class="{{ request()->is('#directory') ? 'active-link lg:inline-flex lg:w-auto w-full px-2 py-2 rounded-lg font-bold items-center justify-center hover:bg-gray-300 hover:text-red-500 text-white' : 'lg:inline-flex lg:w-auto w-full px-2 py-2 rounded-lg font-bold items-center justify-center hover:bg-gray-300 hover:text-red-500 text-white' }}">
            <span> DIRECTORY </span>
          </a>  
        </div>

        <div class="py-4">
          <div class="bg-white flex items-center rounded-full shadow-xl h-8 max-w-lg mx-auto">
            <input class="rounded-l-full w-full h-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="Search Day OF Dubai">
            
            <div class="p-3">
              <button class="text-red-600 p-2 rounded-full hover:bg-red-500 hover:text-white focus:outline-none w-6 h-6 flex items-center justify-center">
                <div class="fa fa-search"></div>
              </button>
            </div>
          </div>
        </div>

      </div>
    </nav>

    
    @yield('header')
    @yield('nav-minor')
    @yield('news')
    @yield('article')
    @yield('business')
    @yield('most-viewed')
    @yield('partners')



    <footer class="footer-s bg-black text-white">
      <div class="footer-con max-w-screen-2xl lg:mx-auto mt-3">
        <div class="f-top flex flex-wrap md:flex-row justify-between">

          <div class="flex flex-col justify-around">
            <div class="dod-img-con h-18 w-40">
              {!! HTML::image('images/dod.png') !!}
            </div>
          </div>


          <div class="f-top-middle flex flex-col justify-around mx-auto">
            <div class="p-3">
              <p class="font-bold"><div class="fa fa-moon-o"></div> 28 C <span>ABU DHABI</span></p>
            </div>
          </div>

          <div class="f-top-right mx-auto">
            <h2 class="text-red-700 font-bold p-3">Subscribe</h2>
            <div class="p-3">
            <input class="border-2 border-gray-300 bg-white h-8 px-5 pr-2 rounded-lg text-sm focus:outline-none"
              type="search" name="search" placeholder="Search Day Of Dubai">
            </div>
          </div>
          
        </div>

        <hr>

        <div class="f-middle p-3">
          <div class="flex flex-wrap justify-between lg:max-w-7xl lg:ml-auto">
            <div class="news-f md:mx-auto lg:w-1/4 md:w-1/2 px-2">
              <h2 class="text-red-700 font-bold p-3">News</h2>
              <p>Beauty, Style & Fashion</p>
              <p>Builders & Real Estate</p>
              <p>Business & Money</p>
              <p>Culture & Entertainment</p>
              <p>Dubai Expo</p>
              <p>Education & Sports</p>
              <p>Environment & Energy</p>
              <p>Food & FMCG</p>
              <p>Government</p>
              <p>Healthcare</p>
              <p>Technology & IT</p>
              <p>Tourism & Hospitality</p>
              <p>Others</p>
            </div>

            <div class="directory-f md:mx-auto lg:w-1/4 md:w-1/2 px-2">
              <h2 class="text-red-700 font-bold p-3">Directory</h2>
              <p>Lorem, ipsum dolor.</p>
              <p>Arts & Entertainment</p>
              <p>Automotive</p>
              <p>Business services & Finance</p>
              <p>Clothing & Accessories</p>
              <p>Computers, Electronics & Office</p>
              <p>Construction & Contractors</p>
              <p>Education</p>
              <p>Food & Dining</p>
              <p>Health & Personal Care</p>
              <p>Health Personal Care</p>
              <p>Home, Garden & Pets</p>
              <p>Hospitality & Shopping</p>
              <p>Industry, Agriculture & Oil</p>
              <p>Media & Communication</p>
              <p>Real Estate</p>
              <p>Sports & Recreation</p>
              <p>Tour, Travel & Transportation</p>
            </div>

            <div class="events-f md:mx-auto lg:w-1/4 md:w-1/2 px-2">
              <h2 class="text-red-700 font-bold p-3">Events</h2>
              <p>Events</p>
              <p>Art / Theatre</p>
              <p>Award</p>
              <p>Championship</p>
              <p>Conference</p>
              <p>Convention</p>
              <p>Exhibition</p>
              <p>Festival</p>
              <p>Music & Concerts</p>
              <p>Others</p>
            </div>

            <div class="connect-f md:mx-auto lg:w-1/4 md:w-1/2 px-2">
              <h2 class="text-red-700 font-bold p-3">Connect</h2>
              <p class="mb-2"><div class="mr-2 fa fa-facebook w-6 h-6 bg-blue-600 p-1"></div><span>Facebook</span></p>
              <p class="mb-2"><div class="mr-2 fa fa-pinterest w-6 h-6 bg-red-700 p-1"></div><span>Pinterest</span></p>
              <p class="mb-2"><div class="mr-2 fa fa-twitter w-6 h-6 bg-blue-500 p-1"></div><span>Twitter</span></p>
              <p class="mb-2"><div class="mr-2 fa fa-linkedin w-6 h-6 bg-blue-500 p-1"></div><span>LinkedIn</span></p>
              <p class="mb-2"><div class="mr-2 fa fa-youtube w-6 h-6 bg-red-500 p-1"></div><span>YouTube</span></p>
              <p class="mb-2"><div class="mr-2 fa fa-instagram w-6 h-6 bg-red-300 p-1"></div><span>Instagram</span></p>
            </div>
          </div>
        </div>

        <hr>

        <div class="f-bottom flex flex-wrap p-3">
          <div class="f-bottom-left md:w-1/2 mx-auto">
            <a href="">Sign in</a>
            <span class="text-red-500 font-bold">|</span>
            <a href="">About</a>
            <span class="text-red-500 font-bold">|</span>
            <a href="">Advertise</a>
            <span class="text-red-500 font-bold">|</span>
            <a href="">Privacy Policy</a>
            <span class="text-red-500 font-bold">|</span>
            <a href="">Contact Us</a>
          </div>

          <div class="f-bottom-left md:w-1/2 mx-auto md:ml-auto md:text-right">
            <p><span>&#169; Copyrights CodesGenius 2021 All Rights Reserved</span><span>DAY OF DUBAI</span></p>
          </div>
        </div>
      </div>
    </footer>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
    $(".nav-toggler").each(function(_, navToggler) {
      var target = $(navToggler).data("target");
      $(navToggler).on("click", function() {
        $(target).animate({
          height: "toggle"
        });
      });
    });
  });


  var mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
  })
  var nexter = document.querySelector(".swiper-button-next");

  function yourFunction(){
        // do whatever you like here
        nexter.click();
        setTimeout(yourFunction, 5000);
    }

  yourFunction();
  </script>

  </body>
</html>