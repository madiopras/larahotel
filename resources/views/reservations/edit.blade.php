@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Reservation</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="customer_id">Customer:</label>
            <select class="form-control" id="customer_id" name="customer_id">
                @foreach ($customers as $customer)
                <option value="{{ $customer->id }}" {{ $reservation->customer_id == $customer->id ? 'selected' : '' }}>{{ $customer->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="room_id">Room:</label>
            <select class="form-control" id="room_id" name="room_id">
                @foreach ($rooms as $room)
                <option value="{{ $room->id }}" {{ $reservation->room_id == $room->id ? 'selected' : '' }}>{{ $room->room_number }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="check_in">Check-In Date:</label>
            <input type="date" class="form-control" id="check_in" name="check_in" value="{{ $reservation->check_in }}">
        </div>
        <div class="form-group">
            <label for="check_out">Check-Out Date:</label>
            <input type="date" class="form-control" id="check_out" name="check_out" value="{{ $reservation->check_out }}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Reservation</button>
    </form>
</div>
@endsection
