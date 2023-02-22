<h1>Shipment Details</h1>
<table>
    <tr>
        <td>ID:</td>
        <td>{{ $shipment->id }}</td>
    </tr>
    <tr>
        <td>From Client:</td>
        <td>{{ $shipment->from_client }}</td>
    </tr>
    <tr>
        <td>To Client:</td>
        <td>{{ $shipment->to_client }}</td>
    </tr>
    <tr>
        <td>Size:</td>
        <td>{{ $shipment->size }}</td>
    </tr>
    <tr>
        <td>Weight:</td>
        <td>{{ $shipment->weight }}</td>
    </tr>
    <tr>
        <td>Category:</td>
        <td>{{ $shipment->category }}</td>
    </tr>
    <tr>
        <td>Urgency:</td>
        <td>{{ $shipment->urgency }}</td>
    </tr>
    <tr>
        <td>Price:</td>
        <td>{{ $shipment->price }}</td>
    </tr>
    <tr>
        <td>Status:</td>
        <td>{{ $shipment->status }}</td>
    </tr>
</table>
<a href="{{ url('/shipments') }}">Back to All Shipments</a>
