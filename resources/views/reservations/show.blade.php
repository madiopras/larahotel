@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reservation Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $reservation->id }}</td>
        </tr>
        <tr>
            <th>Customer</th>
            <td>{{ $reservation->customer->name }}</td>
        </tr>
        <tr>
            <th>Room</th>
            <td>{{ $reservation->room->room_number }}</td>
        </tr>
        <tr>
            <th>Check-In Date</th>
            <td>{{ $reservation->check_in }}</td>
        </tr>
        <tr>
            <th>Check-Out Date</th>
            <td>{{ $reservation->check_out }}</td>
        </tr>
    </table>
    <a href="{{ route('reservations.index') }}" class="btn btn-primary">Back to Reservations</a>
</div>
@endsection
