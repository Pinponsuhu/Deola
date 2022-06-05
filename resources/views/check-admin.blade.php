@extends('layout.app')
@section('content')
<main class="w-full oveflow-y-scroll h-screen">
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
</main>
@endsection
