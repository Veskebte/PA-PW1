@extends('layouts.master')
@section('title', 'Edit Data Booking')
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
        <h3>Form Edit Booking</h3>
        @if (session()->has('info'))
            <div class="alert alert-success">
                {{ session()->get('info') }}
            </div>
        @endif
        <form action="{{ route('admin.update', ['admin' => $admin->id]) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="service" class="form-label">Service</label>
                <select id="service" class="form-select" name="service">
                    <option value="Photoshoot" {{ (old('service') ?? $admin->service) == 'Photoshoot' ? 'selected' : '' }}>Photoshoot</option>
                    <option value="Videoshoot" {{ (old('service') ?? $admin->service) == 'Videoshoot' ? 'selected' : '' }}>Videoshoot</option>
                    <option value="Studio" {{ (old('service') ?? $admin->service) == 'Studio' ? 'selected' : '' }}>Studio</option>
                </select>
                @error('service')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="date">Booking Date</label>
                <input type="date" class="form-control" name="booking_date" id="date" value="{{ old('booking_date') ?? $admin->booking_date }}">
                @error('booking_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-warning mt-2">Edit</button>
        </form>
    </div>
</div>
@endsection
