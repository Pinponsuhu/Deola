<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nigerian Dinner</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('icon/restaurant.png') }}" type="image/x-icon">
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/tw-ele.min.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"><style>
    body{
        font-family: 'Inter', sans-serif;
    }
    input[type="date"]::-webkit-inner-spin-button,
input[type="date"]::-webkit-calendar-picker-indicator {
    display: none;
    -webkit-appearance: none;
}
input[type="time"]::-webkit-calendar-picker-indicator { background: none; display:none; }

html, body {
  background: #F7F5E6;
  height: 100%;
  margin: 0;
  padding: 0;
  width: 100%;
}

.slider {
  margin: 0 auto;
  max-width: 940px;
}

.slide_viewer {
  height: 340px;
  overflow: hidden;
  position: relative;
}

.slide_group {
  height: 100%;
  position: relative;
  width: 100%;
}

.slide {
  display: none;
  height: 100%;
  position: absolute;
  width: 100%;
}

.slide:first-child {
  display: block;
}

.slide:nth-of-type(1) {
  background: #D7A151;
}

.slide:nth-of-type(2) {
  background: #F4E4CD;
}

.slide:nth-of-type(3) {
  background: #C75534;
}

.slide:nth-of-type(4) {
  background: #D1D1D4;
}

.slide_buttons {
  left: 0;
  position: absolute;
  right: 0;
  text-align: center;
}

a.slide_btn {
  color: #474544;
  font-size: 42px;
  margin: 0 0.175em;
  -webkit-transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  -ms-transition: all 0.4s ease-in-out;
  -o-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.slide_btn.active, .slide_btn:hover {
  color: #428CC6;
  cursor: pointer;
}

.directional_nav {
  height: 340px;
  margin: 0 auto;
  max-width: 940px;
  position: relative;
  top: -340px;
}

.previous_btn {
  bottom: 0;
  left: 100px;
  margin: auto;
  position: absolute;
  top: 0;
}

.next_btn {
  bottom: 0;
  margin: auto;
  position: absolute;
  right: 100px;
  top: 0;
}

.previous_btn, .next_btn {
  cursor: pointer;
  height: 65px;
  opacity: 0.5;
  -webkit-transition: opacity 0.4s ease-in-out;
  -moz-transition: opacity 0.4s ease-in-out;
  -ms-transition: opacity 0.4s ease-in-out;
  -o-transition: opacity 0.4s ease-in-out;
  transition: opacity 0.4s ease-in-out;
  width: 65px;
}

.previous_btn:hover, .next_btn:hover {
  opacity: 1;
}

@media only screen and (max-width: 767px) {
  .previous_btn {
    left: 50px;
  }
  .next_btn {
    right: 50px;
  }
}
</style>
    <script src="{{ asset('js/all.js') }}"></script>
    <script src="{{ asset('js/scrollreveal.js') }}"></script>
</head>
<body>
    <nav class="bg-white px-8 md:px-14 def flex justify-between items-center py-4">
        <h1 class="md:text-3xl text-2xl flex items-center font-bold italic"><img src="{{ asset('icon/restaurant.png') }}" class="w-12 h-12" alt=""> Naija <span class="text-rose-500">Dinner</span></h1>
        <div class="gap-x-4 items-center hidden md:flex">
            <a href="/#contact">Contact</a>
            <a href="/gallery">Gallery</a>
            <a href="/menu">Menu</a>
        <a href="/check" class="py-3 px-7 text-white bg-rose-400 font-bold">Check reservation</a>
        </div>
        <i onclick="navMenu()" class="fa fa-bars fa-2x text-rose-400 md:hidden"></i>
        <div id="nav-menu" class="w-72 z-50 px-7 hidden md:hidden fixed top-0 left-0 h-screen bg-rose-400  py-8">
            <h1 class="md:text-3xl py-3 rounded-md flex justify-center bg-white text-2xl mb-8 items-center font-bold italic"><img src="{{ asset('icon/restaurant.png') }}" class="w-12 h-12" alt=""> Naija <span class="text-rose-500">Dinner</span></h1>
            <div class="flex flex-col text-white font-bold items-center gap-y-4">
                <a href="/#contact" onclick="contact()">Contact</a>
                <a href="/gallery">Gallery</a>

            <a href="/menu">Menu</a>
        <a href="/check" class="py-3 px-7 text-rose-400 bg-white font-bold">Check reservation</a>
            </div>
        </div>
    </nav>
    <main class="mt-4">
        <h1 class="ml-6 text-2xl font-bold mb-4">Gallery</h1>
        <div class="slider">
            <div class="slide_viewer">
              <div class="slide_group">
                <div class="slide">
                    <img src="{{ asset('image/88-restaurant-4.jpg') }}" class="h-full w-full" alt="">
                </div>
                <div class="slide">
                    <img src="{{ asset('image/88-restaurant-7.jpg') }}" class="h-full w-full" alt="">

                </div>
                <div class="slide">
                    <img src="{{ asset('image/menu-breakfast.jpg') }}" class="h-full w-full" alt="">

                </div>
                <div class="slide">
                  <img src="{{ asset('image/pounded.jpg') }}" class="h-full w-full" alt="">

                </div>
              </div>
            </div>
          </div><!-- End // .slider -->

          <div class="slide_buttons">
          </div>

          <div class="directional_nav">
            <div class="previous_btn" title="Previous">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                <g>
                  <g>
                    <path fill="#474544" d="M-10.5,22.118C-10.5,4.132,4.133-10.5,22.118-10.5S54.736,4.132,54.736,22.118
                      c0,17.985-14.633,32.618-32.618,32.618S-10.5,40.103-10.5,22.118z M-8.288,22.118c0,16.766,13.639,30.406,30.406,30.406 c16.765,0,30.405-13.641,30.405-30.406c0-16.766-13.641-30.406-30.405-30.406C5.35-8.288-8.288,5.352-8.288,22.118z"/>
                    <path fill="#474544" d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0	c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564	c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z"/>
                  </g>
                </g>
              </svg>
            </div>
            <div class="next_btn" title="Next">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                <g>
                  <g>
                    <path fill="#474544" d="M22.118,54.736C4.132,54.736-10.5,40.103-10.5,22.118C-10.5,4.132,4.132-10.5,22.118-10.5	c17.985,0,32.618,14.632,32.618,32.618C54.736,40.103,40.103,54.736,22.118,54.736z M22.118-8.288	c-16.765,0-30.406,13.64-30.406,30.406c0,16.766,13.641,30.406,30.406,30.406c16.768,0,30.406-13.641,30.406-30.406 C52.524,5.352,38.885-8.288,22.118-8.288z"/>
                    <path fill="#474544" d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035 			L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z"/>
                  </g>
                </g>
              </svg>
            </div>
          </div><!-- End // .directional_nav -->
          <section id="contact" class="py-8 two lg:py-16 flex flex-col-reverse md:flex-row justify-between lg:px-36 items-center px-4 md:px-8 bg-white">
            <div class="ml-16">
                <h1 class="text-2xl font-bold">Cont<span class="text-rose-500">act</span></h1>
                <div class="w-28 border-t-2 mt-2 mb-3"></div>
                <p>4578 Marmora Road,Glasgow D04 89GR</p>
                <h3 class="flex text-rose-500 text-lg mt-2 gap-x-3 font-bold items-center"><i class="fa fa-phone "></i>800-2345-6789</h3>
                <p class="mt-1.5">Mon - Sun 8:00 am to 12:00 pm</p>
                <div class="flex gap-x-4 mt-3">
                    <i class="fab fa-google-plus fa-2x text-rose-300 hover:text-rose-500"></i>
                    <i class="fab fa-facebook fa-2x text-rose-300 hover:text-rose-500"></i>
                    <i class="fab fa-twitter fa-2x text-rose-300 hover:text-rose-500"></i>
                </div>
            </div>
            <div class="mr-16">
                <h1 class="text-2xl mb-3 font-bold">Feed<span class="text-rose-500">back</span></h1>
                <form action="/contact" method="post">
                    @csrf
                    <div class="px-3 py-3 bg-white rounded-md border-l-4 border-rose-500 mt-3 shadow-md flex gap-x-3 items-center">
                        <i class="fa fa-user text-rose-500"></i>
                        <input type="text" name="full_name" placeholder="Full name" class="text-rose-500 outline-none rounded-md w-full block">
                    </div>
                    <div class="px-3 py-3 bg-white rounded-md border-l-4 border-rose-500 mt-3 shadow-md flex gap-x-3 items-center">
                        <i class="fa fa-envelope text-rose-500"></i>
                        <input type="email" name="email" placeholder="Email Address" class="text-rose-500 outline-none rounded-md w-full block">
                    </div>
                    <textarea name="message" id="" class="block p-3 w-full border-l-4 border-rose-500 my-3 resize-none shadow-md" cols="30" rows="3" placeholder="Message here"></textarea>
                    <button class="px-5 py-2 text-white bg-rose-500">Send</button>
                </form>
            </div>
        </section>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </main>
    <script>
        $('.slider').each(function() {
  var $this = $(this);
  var $group = $this.find('.slide_group');
  var $slides = $this.find('.slide');
  var bulletArray = [];
  var currentIndex = 0;
  var timeout;

  function move(newIndex) {
    var animateLeft, slideLeft;

    advance();

    if ($group.is(':animated') || currentIndex === newIndex) {
      return;
    }

    bulletArray[currentIndex].removeClass('active');
    bulletArray[newIndex].addClass('active');

    if (newIndex > currentIndex) {
      slideLeft = '100%';
      animateLeft = '-100%';
    } else {
      slideLeft = '-100%';
      animateLeft = '100%';
    }

    $slides.eq(newIndex).css({
      display: 'block',
      left: slideLeft
    });
    $group.animate({
      left: animateLeft
    }, function() {
      $slides.eq(currentIndex).css({
        display: 'none'
      });
      $slides.eq(newIndex).css({
        left: 0
      });
      $group.css({
        left: 0
      });
      currentIndex = newIndex;
    });
  }

  function advance() {
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      if (currentIndex < ($slides.length - 1)) {
        move(currentIndex + 1);
      } else {
        move(0);
      }
    }, 4000);
  }

  $('.next_btn').on('click', function() {
    if (currentIndex < ($slides.length - 1)) {
      move(currentIndex + 1);
    } else {
      move(0);
    }
  });

  $('.previous_btn').on('click', function() {
    if (currentIndex !== 0) {
      move(currentIndex - 1);
    } else {
      move(3);
    }
  });

  $.each($slides, function(index) {
    var $button = $('<a class="slide_btn">&bull;</a>');

    if (index === currentIndex) {
      $button.addClass('active');
    }
    $button.on('click', function() {
      move(index);
    }).appendTo('.slide_buttons');
    bulletArray.push($button);
  });

  advance();
});

function navMenu(){
        document.getElementById('nav-menu').classList.toggle('hidden');
    }
    function contact(){
        document.getElementById('nav-menu').classList.add('hidden');
    }
    </script>
</body>
