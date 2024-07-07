@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Reservation</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="customer_id">Customer:</label>
            <select class="form-control" id="customer_id" name="customer_id">
                @foreach ($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="room_id">Room:</label>
            <select class="form-control" id="room_id" name="room_id">
                @foreach ($rooms as $room)
                <option value="{{ $room->id }}">{{ $room->room_number }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="check_in">Check-In Date:</label>
            <input type="date" class="form-control" id="check_in" name="check_in" value="{{ old('check_in') }}">
        </div>
        <div class="form-group">
            <label for="check_out">Check-Out Date:</label>
            <input type="date" class="form-control" id="check_out" name="check_out" value="{{ old('check_out') }}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Add Reservation</button>
    </form>
</div>
@endsection
