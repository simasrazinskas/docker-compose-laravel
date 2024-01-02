{{-- resources/views/flightinformation/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Add Flight Information</h1>
  <form action="{{ route('flightinformation.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="airport_id">Airport ID</label>
      <input type="text" class="form-control" id="airport_id" name="airport_id">
    </div>
    <!-- Add other form fields here -->
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection