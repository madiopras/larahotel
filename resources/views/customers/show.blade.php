@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Customer Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $customer->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $customer->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $customer->email }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $customer->phone }}</td>
        </tr>
    </table>
    <a href="{{ route('customers.index') }}" class="btn btn-primary">Back to Customers</a>
</div>
@endsection
