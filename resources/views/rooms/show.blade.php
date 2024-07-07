@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Room Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $room->id }}</td>
        </tr>
        <tr>
            <th>Category</th>
            <td>{{ $room->category->category_name }}</td>
        </tr>
        <tr>
            <th>Room Number</th>
            <td>{{ $room->room_number }}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{ $room->price }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $room->status ? 'Available' : 'Unavailable' }}</td>
        </tr>
    </table>
    <a href="{{ route('rooms.index') }}" class="btn btn-primary">Back to Rooms</a>
</div>
@endsection
