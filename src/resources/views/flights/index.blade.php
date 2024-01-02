@extends('layouts.app')

@section('title', 'Flight Records')

@section('content')
<!-- Page header -->
<x-page-title pretitle="Overview" title="Flight information">
  <!-- Action buttons -->
  <x-action-buttons :showButton1="true" button1Url="{{ route('flights.create') }}" button1Label="Add" :showButton2="true" button2Url="#"
    button2Label="Button Label 2" />
</x-page-title>
<!-- Page body -->
<div class="page-body">
  <div class="container-xl">
    <div class="row row-cards">
      <div class="col-lg-12">
        <div class="card">
          <div class="table-responsive">
            <table class="table table-vcenter card-table">
              <thead>
                <tr>
                  <th>Flight Number</th>
                  <th>Origin</th>
                  <th>Destination</th>
                  <th>Departure Time</th>
                  <th>Arrival Time</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($flights as $flight)
                <tr>
                  <td>{{ $flight->flight_number }}</td>
                  <td>{{ $flight->origin }}</td>
                  <td>{{ $flight->destination }}</td>
                  <td>{{ $flight->departure_time }}</td>
                  <td>{{ $flight->arrival_time }}</td>
                  <td>{{ $flight->status }}</td>
                  <td>
                    @include('flights.partials.actions', ['flight' => $flight])
                  </td>
                </tr>
                @empty
                <td colspan="4">
                  <span class="text-danger">
                    <strong>No Flights Found!</strong>
                  </span>
                </td>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('flights.partials.edit-modal')
  @endsection