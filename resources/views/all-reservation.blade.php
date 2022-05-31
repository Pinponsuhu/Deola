@extends('layout.app')
@section('content')
<main class="w-full oveflow-y-scroll h-screen">
    @include('layout.nav')
    <div class="mt-4 w-full p-4 md:p-8">
        <div class="bg-white p-3 md:p-6">
            <div class="flex justify-between mb-4 items-center">
                <h1 class="text-xl md:text-2xl font-bold">All Reservations</h1>
                <form action="/admin/reservations" method="get">
                    @csrf
                    <input type="date" name="search" onchange="this.form.submit()" class="py-2.5 px-3 text-sm bg-rose-400 font-bold text-white">
                </form>
            </div>
            <div class="overflow-x-scroll w-full">
                <table class="w-full">
                    <thead>
                        <tr class="font-bold">
                            <td class="py-2.5 text-center capitalize text-gray-900 bg-gray-100">Fullname</td>
                            <td class="py-2.5 text-center capitalize text-gray-900 bg-gray-200">Email address</td>
                            <td class="py-2.5 text-center capitalize text-gray-900 bg-gray-100">Phone Number</td>
                            <td class="py-2.5 text-center capitalize text-gray-900 bg-gray-200">Guest Number</td>
                            <td class="py-2.5 text-center capitalize text-gray-900 bg-gray-100">Reference ID</td>
                            <td class="py-2.5 text-center capitalize text-gray-900 bg-gray-200">Reservation date</td>
                            <td class="py-2.5 text-center capitalize text-gray-900 bg-gray-100">Reservation time</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                        <tr>
                            <td class="py-2.5 text-center capitalize text-gray-900 bg-gray-100">{{ $reservation->first_name . ' ' .$reservation->last_name }}</td>
                            <td class="py-2.5 text-center capitalize text-gray-900 bg-gray-200">{{ $reservation->email }}</td>
                            <td class="py-2.5 text-center capitalize text-gray-900 bg-gray-100">{{ $reservation->phone }}</td>
                            <td class="py-2.5 text-center capitalize text-gray-900 bg-gray-200">{{ $reservation->guest }}</td>
                            <td class="py-2.5 text-center capitalize text-gray-900 bg-gray-100">{{ $reservation->reference }}</td>
                            <td class="py-2.5 text-center capitalize text-gray-900 bg-gray-200">{{ $reservation->reservation_date }}</td>
                            <td class="py-2.5 text-center capitalize text-gray-900 bg-gray-100">{{ $reservation->reservation_time }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<script>
    function submitForm(){
        this.form.submit();
    }
</script>
@endsection