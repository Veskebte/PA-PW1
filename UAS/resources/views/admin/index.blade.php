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
    <div class="container py-5 mt-4">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Service</th>
                        <th>Date Booking</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listbooking as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->mobile }}</td>
                            <td>{{ $item->service }}</td>
                            <td>{{ $item->booking_date }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>
                                <form action="{{ route('admin.destroy', ['admin' => $item->id]) }}" method="POST">
                                    @method("DELETE")
                                    @csrf
                                    <a href="{{ url('/admin/'.$item->id) }}" class="btn btn-warning">Detail</a>
                                    <a href="{{ route('admin.edit', ['admin' => $item->id]) }}" class="btn btn-info">Edit</a>
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
