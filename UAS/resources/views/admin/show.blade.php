@extends('layouts.master')
@section('title', 'Data Booking')
@section('content')
<div class="container py-5">
    <h3>Detail Booking {{ $admin->name }}</h3>
    <table class="table table stripped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <td>{{ $admin->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $admin->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $admin->email }}</td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td>{{ $admin->mobile }}</td>
            </tr>
            <tr>
                <th>Service</th>
                <td>{{ $admin->service }}</td>
            </tr>
            <tr>
                <th>Booking Date</th>
                <td>{{ $admin->booking_date }}</td>
            </tr>
        </thead>
    </table>
</div>
@endsection
