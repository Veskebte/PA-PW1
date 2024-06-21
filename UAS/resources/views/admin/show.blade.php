@extends('layouts.master')
@section('title', 'Data Booking')
@section('content')
<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body fixed-top" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand me-auto text-light" style="font-size: 1.5rem" href="{{ route('admin.index') }}">
            Focus<span class="text-danger">.</span> | Waiting List
        </a>
        <div class="d-flex ms-auto">
            <div class="nav-item dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Admin
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid" style="padding-top: 70px;">
    <div class="container py-5">
        <h3>Detail Booking {{ $admin->name }}</h3>
        <table class="table table-striped table-hover">
            <tbody>
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
            </tbody>
        </table>
    </div>
</div>
@endsection
