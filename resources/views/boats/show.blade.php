@extends('layout')

@section('content')

<h2>Boat Details</h2>

<div class="card">
    <div class="card-body">
        <h5>Boat Name: {{ $boat->boat_name }}</h5>
        <span>Boat Type: {{ $boat->boat_type }}</span><br>
        <span>Capacity: {{ $boat->capacity }}</span><br>
        <span>Price: {{ $boat->price }}</span><br>
    </div>
</div>

<a href="{{ route('boats.index') }}" class="btn btn-secondary mt-3">Back</a>

@endsection