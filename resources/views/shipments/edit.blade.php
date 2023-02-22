@extends('layouts.app')

@section('content')
    <h1>Edit Shipment #{{ $shipment->id }}</h1>
    <form action="{{ route('shipments.update', $shipment) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="from_client">From Client:</label>
            <input type="text" name="from_client" id="from_client" value="{{ $shipment->from_client }}">
        </div>
        <div>
            <label for="to_client">To Client:</label>
            <input type="text" name="to_client" id="to_client" value="{{ $shipment->to_client }}">
        </div>
        <div>
            <label for="size">Size:</label>
            <input type="text" name="size" id="size" value="{{ $shipment->size }}">
        </div>
        <div>
            <label for="weight">Weight:</label>
            <input type="text" name="weight" id="weight" value="{{ $shipment->weight }}">
        </div>
        <div>
            <label for="category">Category:</label>
            <input type="text" name="category" id="category" value="{{ $shipment->category }}">
        </div>
        <div>
            <label for="urgency">Urgency:</label>
            <input type="text" name="urgency" id="urgency" value="{{ $shipment->urgency }}">
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="text" name="price" id="price" value="{{ $shipment->price }}">
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="text" name="status" id="status" value="{{ $shipment->status }}">
        </div>
        <button type="submit">Update Shipment</button>
    </form>
@endsection
