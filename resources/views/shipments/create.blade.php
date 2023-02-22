@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Shipment</h1>
        <form method="POST" action="{{ route('shipments.store') }}">
            @csrf
            <div class="form-group">
                <label for="from_client">From client:</label>
                <input type="number" class="form-control" id="from_client" name="from_client" required>
            </div>
            <div class="form-group">
                <label for="to_client">To client:</label>
                <input type="number" class="form-control" id="to_client" name="to_client" required>
            </div>

            <div class="form-group">
                <label for="size">Diameter cm:</label>
                <input type="number" class="form-control" id="size" name="size" required>
            </div>
            <div class="form-group">
                <label for="weight">Weight g:</label>
                <input type="number" class="form-control" id="weight" name="weight" required>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" id="category" name="category">
                    <option value="dental">Dental</option>
                    <option value="documents">Documents</option>
                    <option value="food">Food</option>
                    <option value="special">Special</option>
                    <option value="flowers">Flowers</option>
                    <option value="electronics">Electronics</option>
                    <option value="shopping">Shopping</option>
                </select>
            </div>
            <div class="form-group">
                <label for="urgency">Urgency:</label>
                <select class="form-control" id="urgency" name="urgency">
                    <option value="extraUrgent">Extra Urgent</option>
                    <option value="sameDay">Same Day</option>
                    <option value="notUrgent">Not Urgent</option>
                </select>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" id="status" name="status">
                    <option value="waitingPickup">Waiting Pickup</option>
                    <option value="waitingDelivery">Waiting Delivery</option>
                    <option value="delivered">Delivered</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
