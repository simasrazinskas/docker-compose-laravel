<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller {
    public function index() {
        $flights = Flight::all();
        return view('flights.index', compact('flights'));
    }

    public function create() {
        return view('flights.create');
    }

    public function store(Request $request) {
        $validatedData = $this->validateFlightData($request);
        Flight::create($validatedData);
        return redirect()->route('flights.index');
    }

    public function update(Request $request, $id) {
        $validatedData = $this->validateFlightData($request);
        $flight = Flight::findOrFail($id);
        $flight->update($validatedData);
        return redirect()->route('flights.index')->with('success', 'Flight updated successfully');
    }

    public function show($id) {
        $flight = Flight::findOrFail($id);
        return view('flights.show', compact('flight'));
    }

    public function edit($id) {
        $flight = Flight::findOrFail($id);
        return view('flights.edit', compact('flight'));
    }

    public function destroy($id) {
        $flight = Flight::findOrFail($id);
        $flight->delete();
        return redirect()->route('flights.index')->with('success', 'Flight deleted successfully');
    }
    private function validateFlightData(Request $request) {
        return $request->validate([
            'flight_number' => 'required|max:255',
            'origin' => 'required',
            'destination' => 'required',
            'departure_time' => 'required|date',
            'arrival_time' => 'required|date',
            'status' => 'required',
        ]);
    }

}
