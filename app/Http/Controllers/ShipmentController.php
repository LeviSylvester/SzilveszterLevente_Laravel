<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use App\Models\Utilizator;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    //public function index()
    //{
    //    $shipments = Shipment::all();
    //    return view('shipments.index', ['shipments' => $shipments]);
    //}

    public function index(Request $request)
    {
        $sortField = $request->query('sort') ?? 'id';
        $shipments = Shipment::orderBy($sortField)->get();
        return view('shipments.index', compact('shipments'));
    }

    public function show($id)
    {
        $shipment = Shipment::find($id);

        if (!$shipment) {
            return response()->json(['message' => 'Shipment not found'], 404);
        }

        return view('shipments.show', ['shipment' => $shipment]);
    }

    public function create()
    {
        return view('shipments.create');
        //$clients = Utilizator::where('type', 'client')->get();

        //return view('shipments.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $shipment = new Shipment;
        $shipment->from_client = $request->from_client;
        $shipment->to_client = $request->to_client;
        $shipment->size = $request->size;
        $shipment->weight = $request->weight;
        $shipment->category = $request->category;
        $shipment->urgency = $request->urgency;
        $shipment->price = $request->price;
        $shipment->status = $request->status;
        $shipment->save();

        return redirect('/shipments');
    }

    public function edit($id)
    {
        $shipment = Shipment::find($id);
        return view('shipments.edit', ['shipment' => $shipment]);
    }

    public function update(Request $request, $id)
    {
        $shipment = Shipment::find($id);

        $shipment->from_client = $request->from_client;
        $shipment->to_client = $request->to_client;
        $shipment->size = $request->size;
        $shipment->weight = $request->weight;
        $shipment->category = $request->category;
        $shipment->urgency = $request->urgency;
        $shipment->price = $request->price;
        $shipment->status = $request->status;

        $shipment->save();

        return redirect('/shipments');
    }

    public function destroy($id)
    {
        $shipment = Shipment::find($id);
        $shipment->delete();

        return redirect('/shipments');
    }
}
