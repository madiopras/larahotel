@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Rooms</h1>
    <a href="{{ route('rooms.create') }}" class="btn btn-primary mb-3">Add Room</a>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Room Number</th>
                <th>Price</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $room)
            <tr>
                <td>{{ $room->id }}</td>
                <td>{{ $room->category->category_name }}</td>
                <td>{{ $room->room_number }}</td>
                <td>{{ $room->price }}</td>
                <td>{{ $room->status ? 'Available' : 'Unavailable' }}</td>
                <td>
                    <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
