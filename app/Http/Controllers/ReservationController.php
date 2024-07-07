<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use App\Models\Customer;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with(['room', 'customer'])->get();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        $rooms = Room::where('status', 1)->get();
        $customers = Customer::all();
        return view('reservations.create', compact('rooms', 'customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required',
            'customer_id' => 'required',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
        ]);

        Reservation::create($request->all());

        return redirect()->route('reservations.index')->with('success', 'Reservation created successfully.');
    }

    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
        $rooms = Room::where('status', 1)->get();
        $customers = Customer::all();
        return view('reservations.edit', compact('reservation', 'rooms', 'customers'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'room_id' => 'required',
            'customer_id' => 'required',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
        ]);

        $reservation->update($request->all());

        return redirect()->route('reservations.index')->with('success', 'Reservation updated successfully.');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('reservations.index')->with('success', 'Reservation deleted successfully.');
    }
}
