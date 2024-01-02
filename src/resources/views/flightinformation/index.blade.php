{{-- resources/views/flightinformation/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
  <x-page-title pretitle="Overview" title="Flight information">
    <!-- Action buttons -->
    <x-action-buttons :showButton1="false" button1Url="{{ route('flights.create') }}" button1Label="Add" :showButton2="false" button2Url="#"
      button2Label="Button Label 2" />
  </x-page-title>

  <a href="{{ route('flightinformation.create') }}" class="btn btn-primary">Add New</a>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Corresponding Flight ID</th>
        <th>Airport ID</th>
        <th>Full Aircraft Registration</th>
        <th>Scheduled Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($flightInformations as $flightInformation)
      <tr>
        <td>{{ $flightInformation->id }}</td>
        <td>{{ $flightInformation->corresponding_flight_id }}</td>
        <td>{{ $flightInformation->airport->iata_code }}</td>
        <td>{{ $flightInformation->FullAircraftRegistration }}</td>
        <td>{{ $flightInformation->scheduled_date }}</td>
        <td>
          <a href="{{ route('flightinformation.show', $flightInformation->id) }}">View</a>
          <a href="{{ route('flightinformation.edit', $flightInformation->id) }}">Edit</a>
          <form action="{{ route('flightinformation.destroy', $flightInformation->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div>
    {{ $flightInformations->links() }} {{-- Pagination links --}}
  </div>
</div>
@endsection