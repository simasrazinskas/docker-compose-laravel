{{-- resources/views/flightinformation/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
  <x-page-title pretitle="Overview" title="Flight Information Details">
    <!-- Action buttons -->
    <x-action-buttons :showButton1="false" button1Url="{{ route('flights.create') }}" button1Label="Add" :showButton2="false" button2Url="#"
      button2Label="Button Label 2" />
  </x-page-title>

  <div>ID: {{ $flightInformation->id }}</div>
  {{-- Displaying airport data --}}
  @if($flightInformation->airport)
  <div>Airport City: {{ $flightInformation->airport->name }}</div>
  <div>Airport IATA: {{ $flightInformation->airport->iata_code }}</div>
  <!-- More fields can be added here -->
  @endif
  <div>Airline ID: {{ $flightInformation->airline_id }}</div>
  <div>Alliance ID: {{ $flightInformation->alliance_id }}</div>
  <div>Recurrence Flight ID: {{ $flightInformation->recurrenceflight_id }}</div>
  <div>Tail Flight ID: {{ $flightInformation->tail_flight_id }}</div>
  <div>Exception: {{ $flightInformation->exception ? 'Yes' : 'No' }}</div>
  <div>Corresponding Flight ID: {{ $flightInformation->corresponding_flight_id }}</div>
  <div>Turnaround Period: {{ $flightInformation->turnaround_period }}</div>
  <div>Event Type: {{ $flightInformation->event_type }}</div>
  <div>Client Route ID: {{ $flightInformation->client_route_id }}</div>
  <div>Scheduled Date: {{ $flightInformation->scheduled_date }}</div>
  <div>ETA: {{ $flightInformation->eta }}</div>
  <div>Full Aircraft Name: {{ $flightInformation->FullAircraftName }}</div>
  <div>MSG Aircraft: {{ $flightInformation->msg_aircraft }}</div>
  <div>Status: {{ $flightInformation->status }}</div>
  <div>Comment: {{ $flightInformation->comment }}</div>
  <div>AOC: {{ $flightInformation->aoc ? 'Yes' : 'No' }}</div>
  <div>Closing Employee ID: {{ $flightInformation->closing_employee_id }}</div>
  <div>Aircraft Messages OK: {{ $flightInformation->aircraft_messages_ok ? 'Yes' : 'No' }}</div>
  <div>Incidents Checked: {{ $flightInformation->incidents_checked ? 'Yes' : 'No' }}</div>
  <div>Noise Category: {{ $flightInformation->noise_category }}</div>
  <div>Deleted: {{ $flightInformation->deleted ? 'Yes' : 'No' }}</div>
  <div>Flight Type: {{ $flightInformation->flight_type }}</div>
  <div>Claim ID: {{ $flightInformation->claim_id }}</div>
  <div>Show on FIDS: {{ $flightInformation->show_on_fids ? 'Yes' : 'No' }}</div>
  <div>International: {{ $flightInformation->international ? 'Yes' : 'No' }}</div>
  <div>Flight Notes: {{ $flightInformation->flight_notes }}</div>
  <div>Full Aircraft Registration: {{ $flightInformation->FullAircraftRegistration }}</div>
  <div>Origin: {{ $flightInformation->origin }}</div>
  <div>Request ID: {{ $flightInformation->request_id }}</div>
  <div>Bypass Slots: {{ $flightInformation->bypass_slots ? 'Yes' : 'No' }}</div>
  <div>Payer ID: {{ $flightInformation->payer_id }}</div>
  <div>Is Private: {{ $flightInformation->is_private ? 'Yes' : 'No' }}</div>
  <div>Type: {{ $flightInformation->type }}</div>
  <div>Cancel Notification Time: {{ $flightInformation->cancel_notification_time }}</div>
  <div>Tail Flight Required: {{ $flightInformation->tail_flight_required ? 'Yes' : 'No' }}</div>
  <div>Add All Services on Departure: {{ $flightInformation->add_all_services_on_departure ? 'Yes' : 'No' }}</div>
  <div>Operator: {{ $flightInformation->operator }}</div>
  <div>Aviation Type: {{ $flightInformation->aviation_type }}</div>
  <div>Season ID: {{ $flightInformation->season_id }}</div>
  <div>Cancel Notification Datetime: {{ $flightInformation->cancel_notification_datetime }}</div>
  <div>Corresponding Flight Type: {{ $flightInformation->corresponding_flight_type }}</div>
  <div>Apply VAT: {{ $flightInformation->apply_vat ? 'Yes' : 'No' }}</div>
  <div>Migrate Nov 15: {{ $flightInformation->migrate_nov15 }}</div>
  <div>Locked: {{ $flightInformation->locked ? 'Yes' : 'No' }}</div>
  <div>Delayed: {{ $flightInformation->delayed ? 'Yes' : 'No' }}</div>
  <div>Closed At: {{ $flightInformation->closed_at }}</div>
  <div>Corresponding Linked From ACDM: {{ $flightInformation->corresponding_linked_from_acdm ? 'Yes' : 'No' }}</div>

  <a href="{{ route('flightinformation.index') }}">Back to List</a>
</div>
@endsection