@extends('layout')

@section('content')

<h2>Create Boat</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('boats.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Boat Name:</label>
        <input type="text" name="boat_name" class="form-control">
    </div>

    <div class="mb-3">
        <label>Boat Type:</label>
        <input type="text" name="boat_type" class="form-control">
    </div>

    <div class="mb-3">
        <label>Capacity:</label>
        <input type="text" name="capacity" class="form-control">
    </div>

    <div class="mb-3">
        <label>Price:</label>
        <input type="text" name="price" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection