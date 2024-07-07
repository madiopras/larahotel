@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Category</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="category_name">Category Name:</label>
            <input type="text" class="form-control" id="category_name" name="category_name" value="{{ old('category_name') }}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Add Category</button>
    </form>
</div>
@endsection
