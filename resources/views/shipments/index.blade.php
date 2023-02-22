@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Shipments</h1>
        <a href="{{ route('shipments.create') }}" class="btn btn-primary mb-3">Add Shipment</a>
        <a href="{{ route('shipments.index', ['sort' => 'status']) }}" class="btn btn-primary">Sort by Status</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>From Client</th>
                <th>To Client</th>
                <th>Size</th>
                <th>Weight</th>
                <th>Category</th>
                <th>Urgency</th>
                <th>Price</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($shipments as $shipment)
                <tr>
                    <td>{{ $shipment->id }}</td>
                    <td>{{ $shipment->from_client }}</td>
                    <td>{{ $shipment->to_client }}</td>
                    <td>{{ $shipment->size }}</td>
                    <td>{{ $shipment->weight }}</td>
                    <td>{{ $shipment->category }}</td>
                    <td>{{ $shipment->urgency }}</td>
                    <td>{{ $shipment->price }}</td>
                    <td>{{ $shipment->status }}</td>
                    <td><a href="{{ route('shipments.show', $shipment->id) }}">View</a></td>
                    <td><a href="{{ route('shipments.edit', $shipment->id) }}">Edit</a></td>
                    <td>
                        <form action="{{ route('shipments.destroy', $shipment->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
