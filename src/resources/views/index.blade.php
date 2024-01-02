@extends('layouts.app')

@section('title', 'Bentis')

@section('content')
<!-- Page header -->
<x-page-title pretitle="Bentis" title="Home">
  <!-- Action buttons -->
  <x-action-buttons :showButton1="false" button1Url="{{ route('flights.create') }}" button1Label="Add" :showButton2="false" button2Url="#"
    button2Label="Button Label 2" />
</x-page-title>
<!-- Page body -->
<div class="page-body">
  <div class="container-xl">
  </div>
</div>

@endsection