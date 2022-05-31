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
    <div class="py-14 px-12 md:w-96 w-80 mx-auto mt-10 md:mt-20 bg-white rounded-sm">
        <h1 class="md:text-3xl text-2xl flex items-center font-bold italic"><img src="{{ asset('icon/restaurant.png') }}" class="w-12 h-12" alt=""> Naija <span class="text-rose-500">Dinner</span></h1>
        <p class="text-gray-500">Sign in as an administrator</p>
        @if (Session('message'))
            <p class="text-center text-rose-500 mt-4">{{ Session('message') }}</p>
        @endif
        <form action="/admin/signin" class="mt-6" method="POST">
            @csrf
            <div class="bg-white flex items-center gap-x-1 mb-3 pb-1 border-b-2 border-rose-400">
                <i class="fa fa-user text-xl text-rose-400"></i>
                <input type="email" name="email" class="block outline-none w-full py-3 px-1" placeholder="Email Address" name="" id="">
            </div>
            <div class="bg-white flex items-center gap-x-1 mb-3 pb-1 border-b-2 border-rose-400">
                <i class="fa fa-lock text-xl text-rose-400"></i>
                <input type="password" name="password" class="block outline-none w-full py-3 px-1" placeholder="Password" name="" id="">
            </div>
            <div class="flex items-center gap-x-1 mb-2">
                <input type="checkbox" name="remember_me" id="">
                <span>Remember me</span>
            </div>
            <button class="px-6 py-3 bg-rose-400 text-white font-bold">Sign in</button>
        </form>
    </div>
</body>
