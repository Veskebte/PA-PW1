@extends('layouts.master')
@section('title', 'Edit Data Booking')
@section('content')
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
        {{-- <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') ?? $admin->name }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ old('email') ?? $admin->email }}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" class="form-control" name="mobile" id="mobile" value="{{ old('mobile') ?? $admin->mobile }}">
            @error('mobile')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div> --}}
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
@endsection
