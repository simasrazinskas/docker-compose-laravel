{{-- resources/views/flightinformation/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Edit Flight Information</h1>
  <form action="{{ route('flightinformation.update', $flightInformation->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="airport_id">Airport ID</label>
      <input type="text" class="form-control" id="airport_id" name="airport_id" value="{{ $flightInformation->airport_id }}">
    </div>
    <!-- Add other form fields here -->
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection