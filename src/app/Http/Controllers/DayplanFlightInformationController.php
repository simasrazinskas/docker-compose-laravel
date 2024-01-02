<?php

namespace App\Http\Controllers;

use App\Models\DayplanFlightInformation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class DayplanFlightInformationController extends Controller {
  // Display a listing of the resource.
  public function index() {
    // Fetch 50 latest records by 'id' and paginate
    $flightInformations = DayplanFlightInformation::orderBy('id', 'desc')->paginate(50);
    return view('flightinformation.index', compact('flightInformations'));
  }

  // Store a newly created resource in storage.
  public function store(Request $request) {
    $validator = Validator::make($request->all(), [
      // Define your validation rules here
      'airport_id' => 'required|integer',
      // Add other fields validation rules
    ]);

    if ($validator->fails()) {
      return response()->json($validator->errors(), Response::HTTP_BAD_REQUEST);
    }

    $flightInformation = DayplanFlightInformation::create($validator->validated());
    return response()->json($flightInformation, Response::HTTP_CREATED);
  }

  public function show($id) {
    $flightInformation = DayplanFlightInformation::with('airport')->find($id);

    if (!$flightInformation) {
      // Handle the case where the flight information is not found
      // For example, redirect to the index page with an error message
      return redirect()->route('flightinformation.index')->with('error', 'Flight Information not found.');
    }

    return view('flightinformation.show', compact('flightInformation'));
  }

  // Update the specified resource in storage.
  public function update(Request $request, $id) {
    $flightInformation = DayplanFlightInformation::find($id);

    if (!$flightInformation) {
      return response()->json(['message' => 'Not Found!'], Response::HTTP_NOT_FOUND);
    }

    $validator = Validator::make($request->all(), [
      // Define your validation rules here
      'airport_id' => 'required|integer',
      // Add other fields validation rules
    ]);

    if ($validator->fails()) {
      return response()->json($validator->errors(), Response::HTTP_BAD_REQUEST);
    }

    $flightInformation->update($validator->validated());
    return response()->json($flightInformation, Response::HTTP_OK);
  }

  // Remove the specified resource from storage.
  public function destroy($id) {
    $flightInformation = DayplanFlightInformation::find($id);

    if (!$flightInformation) {
      return response()->json(['message' => 'Not Found!'], Response::HTTP_NOT_FOUND);
    }

    $flightInformation->delete();
    return response()->json(['message' => 'Deleted successfully'], Response::HTTP_OK);
  }
}