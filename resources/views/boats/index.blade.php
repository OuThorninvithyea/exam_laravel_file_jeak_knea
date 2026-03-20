@extends('layout')

@section('content')

<h2>Boat List</h2>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif

<a href="{{ route('boats.create') }}" class="btn btn-primary mb-3">Add Boat</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Boat Name</th>
        <th>Boat Type</th>
        <th>Capacity</th>
        <th>Price</th>
        <th width="250px">Action</th>
    </tr>

    @foreach ($boats as $boat)
    <tr>
        <td>{{ $boat->id }}</td>
        <td>{{ $boat->boat_name }}</td>
        <td>{{ $boat->boat_type }}</td>
        <td>{{ $boat->capacity }}</td>
        <td>{{ $boat->price }}</td>
        <td>
            <a class="btn btn-info btn-sm" href="{{ route('boats.show',$boat->id) }}">Show</a>
            <a class="btn btn-warning btn-sm" href="{{ route('boats.edit',$boat->id) }}">Edit</a>

            <form action="{{ route('boats.destroy',$boat->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $boats->links() }}

@endsection