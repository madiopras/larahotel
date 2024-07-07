@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Room</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('rooms.update', $room->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="category_id">Category:</label>
            <select class="form-control" id="category_id" name="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $room->category_id == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="room_number">Room Number:</label>
            <input type="text" class="form-control" id="room_number" name="room_number" value="{{ $room->room_number }}">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $room->price }}">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status">
                <option value="1" {{ $room->status == 1 ? 'selected' : '' }}>Available</option>
                <option value="0" {{ $room->status == 0 ? 'selected' : '' }}>Unavailable</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Room</button>
    </form>
</div>
@endsection
