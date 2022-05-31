@extends('layout.app')
@section('content')
<main class="w-full oveflow-y-scroll h-screen">
    @include('layout.nav')
    <div class="mt-4 w-full p-4 md:p-8">
        <div class="bg-white p-3 md:p-6">
            <div class="flex justify-between items-center my-4">
                <h1 class="text-xl md:text-2xl font-bold mb-4">Feedbacks</h1>
            </div>
            <div class="mt-4 overflow-x-scroll w-full">
                <table class="w-full">
                    <thead>
                        <tr>
                            <td class="w-1/3 py-2.5 text-gray-900 font-medium px-4 capitalize bg-gray-100">Full name</td>
                            <td class="w-1/3 py-2.5 text-gray-900 font-medium px-4 capitalize bg-gray-200">email</td>
                            <td class="w-1/3 py-2.5 text-gray-900 font-medium px-4 capitalize bg-gray-100">Message</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($feedbacks as $feedback)
                    <tr>
                        <td class="w-1/3 py-2.5 text-gray-900 font-medium px-4 capitalize bg-gray-100">{{ $feedback->full_name }}</td>
                        <td class="w-1/3 py-2.5 text-gray-900 font-medium px-4 capitalize bg-gray-200">{{ $feedback->email }}</td>
                        <td class="w-1/3 py-2.5 text-gray-900 font-medium px-4 capitalize bg-gray-100">{{ $feedback->message }}</td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  
</main>
<div id="clsTest" class="h-screen hidden w-screen z-50 bg-gray-900 bg-opacity-70 fixed top-0">
    <div class="flex justify-end mt-4 mr-4">
        <i class="fa fa-times text-white fa-2x" onclick="clsTest()"></i>
    </div>
    <div class="px-6 py-8 bg-white mx-auto mt-8 w-80 md:w-96 rounded-sm">
        <h1 class="text-xl font-bold text-gray-800">Add new Testimony</h1>
        <form action="/admin/testimonial" method="post">
            @csrf
            <input type="text" name="full_name" placeholder="Full Name" class="outline-none py-3 block mb-3 p-1.5 shadow-md w-full border-b-4 border-rose-400">
            <textarea id="" name="testimony" cols="30" placeholder="Type Testimony here" rows="4" class="resize-none p-1.5 shadow-md outline-none py-3 block my-3 w-full border-b-4 border-rose-400"></textarea>
            <button class="px-8 py-3 bg-rose-400 text-white font-bold">Add Testimony</button>
        </form>
    </div>
</div>
<script>
    function clsTest(){
            document.getElementById('clsTest').classList.add('hidden');
        }
    function openTest(){
            document.getElementById('clsTest').classList.remove('hidden');
        }
</script>
@endsection