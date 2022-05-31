<div class="py-3 bg-white flex justify-between items-center shadow-md px-4 md:px-14 w-full">
    <h1 class="md:text-3xl text-2xl flex items-center font-bold italic"><img src="{{ asset('icon/restaurant.png') }}" class="w-12 h-12" alt=""> Naija <span class="text-rose-500">Dinner</span></h1>
    <form action="/admin/logout" class="hidden md:block" method="post">
        @csrf
        <button class="py-2.5 px-6 bg-rose-400 text-white font-bold">Logout</button>
    </form>
    <i class="fa fa-bars fa-2x text-rose-400 md:hidden" onclick="nav_menu()"></i>
</div>