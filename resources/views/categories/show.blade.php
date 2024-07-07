@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Category Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $category->id }}</td>
        </tr>
        <tr>
            <th>Category Name</th>
            <td>{{ $category->category_name }}</td>
        </tr>
    </table>
    <a href="{{ route('categories.index') }}" class="btn btn-primary">Back to Categories</a>
</div>
@endsection
