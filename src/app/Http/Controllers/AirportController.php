<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;

class AirportController extends Controller {
  // Display a listing of the resource.
  public function index() {
    $airports = Airport::all();
    return view('airports.index', compact('airports'));
  }

  // Show the form for creating a new resource.
  public function create() {
    return view('airports.create');
  }

  // Store a newly created resource in storage.
  public function store(Request $request) {
    $validatedData = $request->validate([
      // Validation rules
    ]);

    Airport::create($validatedData);
    return redirect()->route('airports.index');
  }

  // Display the specified resource.
  public function show($id) {
    $airport = Airport::findOrFail($id);
    return view('airports.show', compact('airport'));
  }

  // Show the form for editing the specified resource.
  public function edit($id) {
    $airport = Airport::findOrFail($id);
    return view('airports.edit', compact('airport'));
  }

  // Update the specified resource in storage.
  public function update(Request $request, $id) {
    $validatedData = $request->validate([
      // Validation rules
    ]);

    $airport = Airport::findOrFail($id);
    $airport->update($validatedData);
    return redirect()->route('airports.index');
  }

  // Remove the specified resource from storage.
  public function destroy($id) {
    $airport = Airport::findOrFail($id);
    $airport->delete();
    return redirect()->route('airports.index');
  }
}