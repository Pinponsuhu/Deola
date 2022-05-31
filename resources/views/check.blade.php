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
    {{-- <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/tw-ele.min.css') }}" /> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
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
</head>
<body class="bg-rose-100 w-screen overflow-x-hidden">
    <nav class="bg-white px-8 md:px-14 def flex justify-between items-center py-4">
        <h1 class="md:text-3xl text-2xl flex items-center font-bold italic"><img src="{{ asset('icon/restaurant.png') }}" class="w-12 h-12" alt=""> Naija <span class="text-rose-500">Dinner</span></h1>
        <div class="gap-x-4 items-center hidden md:flex">
            <a href="/#contact">Contact</a>
            <a href="/gallery">Gallery</a>
        <a href="/" class="py-3 px-7 text-white bg-rose-400 font-bold">Home</a>
        </div>
        <i onclick="navMenu()" class="fa fa-bars fa-2x text-rose-400 md:hidden"></i>
        <div id="nav-menu" class="w-72 z-50 px-7 hidden md:hidden fixed top-0 left-0 h-screen bg-rose-400  py-8">
            <h1 class="md:text-3xl py-3 rounded-md flex justify-center bg-white text-2xl mb-8 items-center font-bold italic"><img src="{{ asset('icon/restaurant.png') }}" class="w-12 h-12" alt=""> Naija <span class="text-rose-500">Dinner</span></h1>
            <div class="flex flex-col text-white font-bold items-center gap-y-4">
                <a href="/#contact" onclick="contact()">Contact</a>
                <a href="/gallery">Gallery</a>
        <a href="/" class="py-3 px-7 text-rose-400 bg-white font-bold">Home</a>
            </div>
        </div>
    </nav>

    <main>
        <h1 class="text-center text-xl font-bold my-4">Check Reservation Details</h1>
        <div class="w-11/12 md:w-8/12 flex mt-4 bg-white shadow-md mx-auto">
            <div class="p-3 bg-rose-400">
                <i class="fa fa-search text-white text-xl"></i>
            </div>
            <form action="/search" method="get">
                @csrf
                <input type="search" value="@if(isset($search)) {{ $search }} @endif" name="search" class=" outline-none w-full py-3 px-2 block bg-white" placeholder="Input Reference ID">
            </form>
        </div>
        @isset($info)
            <div class="my-6 w-11/12 md:w-96 mx-auto rounded-sm bg-white px-6 py-8">
                <img src="{{ asset('/uploads/' .$info->image) }}" alt="" class="h-52 w-52 mb-2 rounded-full block mx-auto">
                <h1 class="text-lg"><b>Full name:</b> {{ $info->first_name . ' '. $info->last_name }}</h1>
                    <h1 class="text-lg"><b>Reference ID:</b> <span class="text-sm">{{ $info->reference }}</span></h1>
                    <h1 class="text-lg"><b>Email Address:</b> {{ $info->email }}</h1>
                    <h1 class="text-lg"><b>Phone Number:</b> {{ $info->phone }}</h1>
                    <h1 class="text-lg"><b>Number of Guest:</b> {{ $info->guest }}</h1>
                    <h1 class="text-lg"><b>Reservation Date:</b> {{ $info->reservation_date }}</h1>
                    <h1 class="text-lg"><b>Reservation Time:</b> {{ $info->reservation_time }}</h1>
                    <h1 class="text-xl font-bold mt-3 mb-1">All Guest</h1>
                    @foreach ($guests as $guest)
                        <div class="py-3 px-2 border-b-2 mb-1 border-rose-400">
                            <h1 class="text-lg"><b>Guest Name:</b>{{ $guest->fullname }}</h1>
                            <p class="text-md "><b>Guest Phone:</b> {{ $guest->guest_no }}</p>
                        </div>
                    @endforeach

            </div>
        @endisset
    </main>
    <script>
         function navMenu(){
        document.getElementById('nav-menu').classList.toggle('hidden');
    }
    </script>
</body>
