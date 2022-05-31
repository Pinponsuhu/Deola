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
    <script src="{{ asset('js/scrollreveal.js') }}"></script>
</head>
<body class="bg-rose-100 bg-opacity-70 flex w-screen overflow-x-hidden">
    <nav id="menu" class="w-64 fixed md:relative hidden md:block z-40 h-screen py-5 bg-rose-400 text-white">
            <div class="flex flex-col justify-center items-center w-20 h-20 mx-auto rounded-full bg-white">
                <img src="{{ asset('image/user_dummy.png') }}" class="w-10 h-auto block" alt="">
            </div>

            <div>
                <ul class="mt-6 flex flex-col items-center md:items-start font-medium gap-x-4 px-4 text-md">
                    <a href="/admin/dashboard" class="font-medium block py-2.5 hover:bg-rose-200 text-white hover:rounded-md hover:px-3"><li>Dashboard</li></a>
                    <a href="/admin/testimonial" class="font-medium block py-2.5 hover:bg-rose-200 text-white hover:rounded-md hover:px-3"><li>Testimonials</li></a>
                    <a href="/admin/reservations" class="font-medium block py-2.5 hover:bg-rose-200 text-white hover:rounded-md hover:px-3"><li>Reservations</li></a>
                    <a href="/admin/contact" class="font-medium block py-2.5 hover:bg-rose-200 text-white hover:rounded-md hover:px-3"><li>Contacts</li></a>
                    <a href="/change/password" class="font-medium block py-2.5 hover:bg-rose-200 text-white hover:rounded-md hover:px-3"><li>Change Password</li></a>
                    <form action="/admin/logout" class="mt-8" method="POST">
                        @csrf
                        <button class="py-2.5 px-6 bg-white text-rose-400 font-bold">Logout</button>
                    </form>
                </ul>
            </div>
    </nav>
    @yield('content')
    <script>
        function nav_menu(){
            document.getElementById('menu').classList.toggle('hidden');
        }
    </script>
</body>
