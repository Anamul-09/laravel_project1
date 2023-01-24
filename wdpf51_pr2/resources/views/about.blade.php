@extends('layouts.app')
@section('title', 'About us')

@section('content')
  <h1>Section Header</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quam veritatis similique, dignissimos expedita ea
    unde inventore iure, consectetur dolorem voluptatum cumque dolore eum sit? Eius quis in expedita nesciunt?</p>
  {{-- @endsection --}}
@show


@push('scripts')
  <script src="myscript.js"></script>
@endpush
@push('style')
  <link rel="stylesheet" href="aboutstyle.css">
@endpush
