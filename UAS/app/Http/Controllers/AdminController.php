<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Booking;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $listbooking = Booking::all();

        return view('admin.index', ['listbooking' => $listbooking]);
    }

    public function show($id) {
        $admin = Booking::find($id);

        return view('admin.show', ['admin' => $admin]);
    }

    public function edit(Booking $admin) {
        return view('admin.edit', ['admin' => $admin]);
    }

    public function update(Request $request, Booking $admin) {
        $validateData = $request->validate([
            'service' => 'required|string',
            'booking_date' => 'required|date',
        ]);
        $admin->update($validateData);

        $request->session()->flash('info', "Booking updated successfully!");
        return redirect()->route('admin.index');

    }

    public function destroy(Booking $admin) {
        $admin->delete();

        return redirect()->route('admin.index')->with('info', 'Booking deleted successfully!');
    }
}
