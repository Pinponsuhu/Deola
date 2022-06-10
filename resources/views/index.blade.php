<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nigerian Dinner</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

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
</style>
    <script src="{{ asset('js/all.js') }}"></script>
    <script src="{{ asset('js/scrollreveal.js') }}"></script>
</head>
<body class="bg-rose-100 w-screen overflow-x-hidden">
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
    <main>
        <section class="mt-4 md:mt-0 grid py-6 md:pb-0 md:grid-cols-2 items-center px-8 overflow-y-hidden food">
            <div><img src="{{ asset('image/table.jpg') }}" class= "mx-auto block w-11/12 h-auto md:h-full md:w-auto" alt=""></div>
            <div>
                <div class="px-8 md:px-12 lg:px-20 py-6 md:py-0">
                    <h2 class="text-2xl mt-4 md:mt-0 hand font-medium">WHEN IT COMES TO NIGERIAN FOOD</h2>
                <h1 class="text-3xl hand font-medium mb-2">WE ARE SECOND TO NONE!</h1>
                <p class="hand">The restaurant was established in 2005 and has always been the face of Naija Kitchen. Celebrities, Government Officials and Individuals from all walks of life who have tasted the specials of Naija Kitchen Restaurant can testify to the quality of service and deliciousness of our delicacies.</p>
                <h3 class="mt-2 hand text-xl">Reservation</h3>
                </div>
                <form action="/pay" class="three w-full overflow-x-hidden px-8 md:px-12 lg:px-20 mt-1" enctype="multipart/form-data" method="post">
                    @csrf
            @if (Session('err'))
                    <p class="text-red-500 text-lg font-bold">{{ Session('err') }}</p>
            @endif
            <input type="hidden" name="orderID" value="345">
            <input type="hidden" name="amount" value="120000"> {{-- requirose in kobo --}}
            <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="currency" value="NGN">
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- requirose --}}
            <div id="set1" class="">
                    <div class="px-3 py-3 bg-white rounded-md flex gap-x-3 items-center">
                        <div class="flex gap-x-3 items-center">
                          <i class="fa fa-user text-rose-500"></i>
                          <input type="text" id="firstname" placeholder="First name" name="first_name" value="{{ old('first_name') }}" class="text-rose-500 bg-white outline-none rounded-md w-full block">
                        </div>
                        <div class="flex gap-x-3 items-center">
                          <i class="fa fa-user text-rose-500"></i>
                          <input type="text" id="lastname" placeholder="Last name" name="last_name" value="{{ old('last_name') }}" class="text-rose-500 bg-white outline-none rounded-md w-full block">
                        </div>
                        </div>

                        @error('first_name')
                                <p class=" text-sm font-bold my-1 text-red-500">{{ $message }}</p>
                        @enderror
                        @error('last_name')
                                <p class=" text-sm font-bold my-1 text-red-500">{{ $message }}</p>
                        @enderror
                    <div class="grid grid-cols-2 gap-x-3 bg-white mt-2 py-3 rounded-md px-2">
                      <div class="flex gap-x-3 items-center">
                        <i class="fa fa-envelope text-rose-500"></i>
                        <input type="email" id="email" value="{{ old('email') }}" placeholder="Email Address" name="email" class="text-rose-500 bg-white outline-none rounded-md w-full block">
                      </div>
                      <div class="flex gap-x-3 items-center">
                        <i class="fa fa-phone text-rose-500"></i>
                        <input type="text" id="phone" value="{{ old('phone') }}" placeholder="Phone Number" name="phone" class="text-rose-500 bg-white outline-none rounded-md w-full block">
                      </div>

                    </div>
                    @error('email')
                    <p class=" text-sm font-bold my-1 text-red-500">{{ $message }}</p>
            @enderror
          @error('phone')
                    <p class=" text-sm font-bold my-1 text-red-500">{{ $message }}</p>
            @enderror
                    <div class="grid gap-y-3 md:grid-cols-3 my-3 gap-x-4">
                        <div class=" w-full flex bg-white gap-x-3 rounded-md items-center p-3">
                            <i class="fa fa-users text-rose-500"></i>
                            <input onload="guest()" id="guest" value="{{ old('guest') }}" name="guest" placeholder="# of Guests" class="text-rose-500 outline-none rounded-md w-full block">
                        </div>
                        <div class=" w-full flex bg-white gap-x-3 rounded-md items-center p-3">
                            <i class="fa fa-calendar text-rose-500"></i>
                            <input type="date" id="datee" value="{{ old('reservation_date') }}" name="reservation_date"  class=" text-rose-500 outline-none rounded-md w-full block">
                        </div>
                        <div class=" w-full flex bg-white gap-x-3 rounded-md items-center p-3">
                            <i class="fa fa-clock text-rose-500"></i>
                            <input type="time" id="time" value="{{ old('reservation_time') }}" name="reservation_time" placeholder="# of Guests" class="text-rose-500 outline-none rounded-md w-full block">
                        </div>
                    </div>
                    @error('guest')
                                <p class=" text-sm font-bold my-1 text-red-500">{{ $message }}</p>
                        @enderror
                        @error('reservation_date')
                                <p class=" text-sm font-bold my-1 text-red-500">{{ $message }}</p>
                        @enderror
                        @error('reservation_time')
                                <p class=" text-sm font-bold my-1 text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div id="set2" class="hidden mb-4">
                        <div id="guest_field" class="px-3 py-3 my-2 bg-white rounded-md flex gap-x-3 items-center">
                            <div class="flex gap-x-3 items-center">
                              <i class="fa fa-user text-rose-500"></i>
                              <input type="text" id="guest_name" placeholder="Input Guest Fullname" name="guest_name[]" value="{{ old('guest_name') }}" class="text-rose-500 bg-white outline-none rounded-md w-full block">
                            </div>
                            <div class="flex gap-x-3 items-center">
                              <i class="fa fa-phone text-rose-500"></i>
                              <input type="text" id="guest_no" placeholder="Input Guest Number" name="guest_no[]" value="{{ old('guest_no') }}" class="text-rose-500 bg-white outline-none rounded-md w-full block">
                            </div>
                            </div>
                    </div>
                        <div class="mb-3">
                            <span onclick="cam()" id="cam" class="bg-blue-400 text-white px-4 py-2.5">Open Cam</span>
                            <h1 id="cam-msg" class="hidden">Image Added successfully</h1>
                        </div>
                                <div id="my_camera" class="mb-3"></div>
                        <input type="button" value="Take Snapshot" class="hidden  mb-3  bg-blue-400 text-white py-2.5 px-5 rounded-md" id="capture" onclick="take_snapshot()">
                        <input type="hidden" name="image" class="image-tag my-2" >
                    <span id="next1" onclick="guest(); guestFxn();" class="text-white text-center font-bold uppercase text-md bg-green-500 block w-36 mb-4 px-6 py-3">Next</span>
                    <button class="text-white font-bold uppercase text-md bg-rose-500 block w-36 mb-4 px-6 py-3">Reserve</button>
                </form>

            </div>
        </section>
        <section class="two py-16 px-8 lg:px-28 md:grid md:grid-cols-2 items-center bg-white">
            <div class="">
                <h1 class="text-2xl font-bold mt-4 md:mt-0">Discover</h1>
                <h3 class="text-2xl text-rose-500 font-bold">Our Restaurant</h3>
                <div class="w-36 border-t-2 mt-2 mb-3"></div>
                <p class="text-lg">All our delicacies are special, each with its own secret African in-house recipe, made with love and passion. Our food fills the stomach and the heart.</p>
            </div>
            <div class="flex flex-col md:flex-row justify-end gap-x-5">
                <img src="{{ asset('image/jollof.jpg') }}" class="hidden md:flex two-img rounded-md shadow-md md:h-72 w-auto" alt="">
                <img src="{{ asset('image/ofada.jpg') }}" class="two-img2 rounded-md shadow-md md:h-72 w-auto" alt="">
            </div>
        </section>
        {{-- <section class="md:grid three md:grid-cols-2 py-16 px-8 md:px-28 gap-x-8 items-center">
            <div>
                <img src="{{ asset('image/pounded.jpg') }}" class="rounded-md block w-full" alt="">
            </div>
            <div>
                <h1 class="text-2xl font-bold mt-4 md:mt-0">About</h1>
                <h3 class="text-2xl text-rose-500 font-bold">Naija Dinner</h3>
                <div class="w-36 border-t-2 border-white mt-2 mb-3"></div>
                <p>All our delicacies are special, each with its own secret African in-house recipe, made with love and passion. Our food fills the stomach and the heart.</p>
            </div>
        </section> --}}
        <section class="py-8 lg:py-16 px-6 lg:px-28 three bg-white">
            <h1 class="text-2xl text-center mb-1.5">Popular <span class="italic text-rose-500">Menu</span></h1>
            <div class="w-36 border-t-2 mx-auto three border-rose-100 mb-4"></div>
            <p class="md:text-center mt-2.5 lg:px-20 px-4 three text-gray-500">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
            <div class="mt-6 grid grid-cols-2 lg:grid-cols-4 gap-y-6 gap-x-6">
                <div class="">
                    <img src="{{ asset('image/jollof_rice_2.jpg') }}" class="rounded-md shadow-md mx-auto" alt="">
                    <p class="mt-2 font-medium text-center text-rose-500 text-lg">Jollof Rice</p>
                </div>
                <div class="">
                    <img src="{{ asset('image/fried_rice_recipe.jpg') }}" class="rounded-md shadow-md mx-auto" alt="">
                    <p class="mt-2 font-medium text-center text-rose-500 text-lg">Fried Rice</p>
                </div>
                <div class="">
                    <img src="{{ asset('image/pepper-soup.jpg') }}" class="rounded-md shadow-md mx-auto" alt="">
                    <p class="mt-2 font-medium text-center text-rose-500 text-lg">Pepper Soup</p>
                </div>
                <div class="">
                    <img src="{{ asset('image/moi.jpg') }}" class="rounded-md shadow-md mx-auto" alt="">
                    <p class="mt-2 font-medium text-center text-rose-500 text-lg">Moi Moi</p>
                </div>
            </div>
        </section>
        <section class="py-8 lg:py-16 right px-6 lg:px-28">
            <h1 class="text-2xl font-bold mt-4 md:mt-0 text-center">About <i class="text-rose-500">Testimonials</i></h1>
                <div class="w-44 border-t-2 mx-auto border-white mt-2 mb-3"></div>
                <div id="carouselExampleCaptions" class="carousel slide relative carousel-dark" data-bs-ride="carousel">
                    <div class="carousel-inner relative w-full overflow-hidden">
                      @foreach ($testimonies as $testimony)


                      {{ $testimony->index }}
                      <div class="carousel-item @if ($loop->index == 0) active @endif relative float-left w-full text-center">
                        <p class="text-xl italic mx-auto text-gray-700 max-w-4xl">
                          "{{ $testimony->testimony }}"
                        </p>
                        <div class="mt-12 mb-6 flex justify-center">
                        </div>
                        <p class="text-gray-500">{{$testimony->full_name}}</p>
                      </div>
                      @endforeach

                    </div>
                    <button
                      class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                      type="button"
                      data-bs-target="#carouselExampleCaptions"
                      data-bs-slide="prev"
                    >
                      <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                      class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                      type="button"
                      data-bs-target="#carouselExampleCaptions"
                      data-bs-slide="next"
                    >
                      <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
        </section>
        <section id="contact" class="py-8 two lg:py-16 flex flex-col-reverse md:flex-row justify-between lg:px-36 items-center px-4 md:px-8 bg-white">
            <div class="md:ml-16 mt-5 md:mt-0">
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
            <div class="md:mr-16">
                <h1 class="text-2xl mb-3 font-bold">Feed<span class="text-rose-500">back</span></h1>
                <form action="/contact" method="post">
                    @csrf
                    <div class="px-3 py-3 bg-white rounded-md border-l-4 border-rose-500 mt-3 shadow-md flex gap-x-3 items-center">
                        <i class="fa fa-user text-rose-500"></i>
                        <input type="text" id="fullname" name="full_name" placeholder="Full name" class="text-rose-500 outline-none rounded-md w-full block">
                    </div>
                    <div class="px-3 py-3 bg-white rounded-md border-l-4 border-rose-500 mt-3 shadow-md flex gap-x-3 items-center">
                        <i class="fa fa-envelope text-rose-500"></i>
                        <input type="email" id="email" name="email" placeholder="Email Address" class="text-rose-500 outline-none rounded-md w-full block">
                    </div>
                    <textarea name="message" id="message" class="block p-3 w-full border-l-4 border-rose-500 my-3 resize-none shadow-md" cols="30" rows="3" placeholder="Message here"></textarea>
                    <button class="px-5 py-2 text-white bg-rose-500">Send</button>
                </form>
            </div>
        </section>
    </main>

    <div id="clsTransac" class="w-screen h-screen @if (Session('reference')) block @else hidden @endif fixed top-0">
        <div class="bg-white w-80 md:w-96 mx-auto py-8 px-5 mt-10 rounded-md">
        <div class="flex justify-end">
            <i class="fa fa-times fa-2x  cursor-pointer text-rose-500" id="clsTans" onclick="clsTransaction()"></i>
        </div>
            <div class="justify-center flex mb-4">
                <i class="fa fa-check text-green-400 fa-2x"></i>
            </div>
            <h1 class="font-bold text-gra-900 text-2xl text-center">Success</h1>
            <p class="mt-2 text-center">Kindly note the transaction reference number below</p>
            @if (Session('reference'))
                <p class="mt-4 text-center">{{ Session('reference') }}</p>
            @endif
            <p class="mt-2 text-center">Reservation will be cancelled after 30 minutes of set time</p>

        </div>
    </div>
    @if (Session('msgg'))
    <div id="mesgg" onload="loadd()" class="fixed w-6/12 px-3 top-4 right-3 rounded-md font-bold bg-green-400 text-white py-3">
        <p>{{ Session('msgg') }}</p>
    </div>
    @endif

    @if (Session('msg'))
   <div class="w-8/12 py-4 text-md font-bold text-white fixed top-4 left-2 rounded-md">
    {{ Session('msg') }}
</div>
   @endif
<script>
    function guestFxn() {

}

    function guest(){
        var val1 = document.getElementById('guest').value;
        var val2 = document.getElementById('firstname').value;
        var val3 = document.getElementById('lastname').value;
        var val4 = document.getElementById('email').value;
        var val5 = document.getElementById('phone').value;
        var val6 = document.getElementById('datee').value;
        var val7 = document.getElementById('time').value;
        if(val1 != '' && val2 != '' && val3 != '' && val4 != '' && val5 != '' && val6 != '' && val7 != ''){
        var vall = document.getElementById('guest').value;
        newGuest = parseInt(vall) -1;
        document.getElementById('set1').classList.add('hidden');
        document.getElementById('next1').classList.add('hidden');
        document.getElementById('set2').classList.remove('hidden');
        for(var i = 1; i<= newGuest; i++){
            const node = document.getElementById("guest_field");
            console.log(node);
            const clone = node.cloneNode(true);
            document.getElementById("set2").appendChild(clone);
        }
    }else{
        alert('Kindly fill all fields in the form')
    }
    }
    function navMenu(){
        document.getElementById('nav-menu').classList.toggle('hidden');
    }
    function contact(){
        document.getElementById('nav-menu').classList.add('hidden');
    }


            setTimeout(() => {
                document.getElementById('mesgg').classList.add('hidden');
            }, 1800);
        function clsTransaction(){
            document.getElementById('clsTransac').classList.add('hidden');
        }

        ScrollReveal().reveal('.tonewo', { delay: 300,  });
        ScrollReveal().reveal(".two", {
  duration: 1500,
  origin: "left",
  distance: "100px",
  easing: "ease-in-out",

});
ScrollReveal().reveal(".two-img", {
  duration: 1000,
  origin: "bottom",
  distance: "100px",
  easing: "cubic-bezier(.37,.01,.74,1)",
  opacity: 0.3,
  scale: 0.5

});
ScrollReveal().reveal(".food", {
  duration: 1000,
  origin: "bottom",
  distance: "100px",
  easing: "cubic-bezier(.37,.01,.74,1)",
  opacity: 0.3,
  scale: 0.5

});
ScrollReveal().reveal(".two-img2", {
  duration: 1000,
  origin: "top",
  distance: "100px",
  easing: "cubic-bezier(.37,.01,.74,1)",
  opacity: 0.3,
  scale: 0.5
});
ScrollReveal().reveal(".three", {
  duration: 1300,
  origin: "left",
  distance: "100px",
  easing: "ease-in-out",

});
ScrollReveal().reveal(".right", {
  duration: 1300,
  origin: "right",
  distance: "100px",
  easing: "ease-in-out",

});
function cam(){
    Webcam.set({

width: 320,

height: 220,

image_format: 'jpeg',

jpeg_quality: 200

});

Webcam.attach( '#my_camera' );
document.getElementById('capture').classList.remove('hidden');
}






function take_snapshot() {

Webcam.snap( function(data_uri) {
    console.log(data_uri);

    $(".image-tag").val(data_uri);

    document.getElementById('my_camera').classList.add('hidden');
    document.getElementById('capture').classList.add('hidden');
    document.getElementById('cam').classList.add('hidden');
document.getElementById('cam-msg').classList.remove('hidden');
    document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';

} );

}

    </script>

</body>
</html>
