@extends('layout')

@section('content')

<h2>Edit Boat</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('boats.update',$boat->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Boat Name:</label>
        <input type="text" name="boat_name" value="{{ $boat->boat_name }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Boat Type:</label>
        <input type="text" name="boat_type" value="{{ $boat->boat_type }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Capacity:</label>
        <input type="text" name="capacity" value="{{ $boat->capacity }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Price:</label>
        <input type="text" name="price" value="{{ $boat->price }}" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection