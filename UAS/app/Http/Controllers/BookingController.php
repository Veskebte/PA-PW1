<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index() {
        $booking = Booking::all();
        return view('booking.create', compact('booking'));
    }

    public function create() {
        return view('booking.create');
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:bookings,email',
            'mobile' => 'required|string|max:15',
            'service' => 'required|string',
            'booking_date' => 'required|date',
        ]);

        $booking = new Booking();
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->mobile = $request->mobile;
        $booking->service = $request->service;
        $booking->booking_date = $request->booking_date;
        $booking->save();

        $request->session()->flash('info',"Booking $booking->nama succesfully saved to the database!");
        return redirect()->route('booking.create');
    }
}
