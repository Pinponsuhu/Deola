@extends('layout.app')
@section('content')
<main class="w-full oveflow-y-scroll h-screen">
    @include('layout.nav')
    <div class="mt-4 w-full p-4 md:p-8">
        <div class="bg-white p-3 md:p-6">
            <div class="flex justify-between items-center my-4">
                <h1 class="text-2xl font-bold mb-4">Change password</h1>
            </div>
            <div class="mt-4 w-full">
                <form action="/change/password" method="post">
                    @csrf
                    <input type="text" name="password" class="block py-3 px-1 border-b-4 border-rose-400 shadow-md outline-none w-80 md:w-96" placeholder="Password">
                    <input type="text" name="password_confirmation" class="block py-3 px-1 border-b-4 shadow-md border-rose-400 my-4 outline-none w-80 md:w-96" placeholder="Confirm Password">
                    <button class="py-3 px-6 bg-rose-400 text-white font-bold">Change</button>
                </form>
            </div>
        </div>
    </div>
  
</main>

<script>
    function clsTest(){
            document.getElementById('clsTest').classList.add('hidden');
        }
    function openTest(){
            document.getElementById('clsTest').classList.remove('hidden');
        }
</script>
@endsection