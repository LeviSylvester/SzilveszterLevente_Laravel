<?php

namespace App\Http\Controllers;

use App\Models\Utilizator;
use Illuminate\Http\Request;

class UtilizatorController extends Controller
{
    public function index()
    {
        $utilizatori = Utilizator::all();
        return view('utilizatori.index', ['utilizatori' => $utilizatori]);
    }

    public function create()
    {
        return view('utilizatori.create');
    }

    public function store(Request $request)
    {
        $utilizator = new Utilizator;
        $utilizator->email = $request->email;
        $utilizator->fullname = $request->fullname;
        $utilizator->password = $request->password;
        $utilizator->phonenumber = $request->phonenumber;
        $utilizator->address = $request->address;
        $utilizator->type = $request->type;
        $utilizator->save();

        return redirect()->route('/utilizatori');
    }

    public function edit(Utilizator $utilizator)
    {
        return view('utilizatori.edit', ['utilizator' => $utilizator]);
    }

    public function update(Request $request, Utilizator $utilizator)
    {
        $utilizator->email = $request->email;
        $utilizator->fullname = $request->fullname;
        $utilizator->password = $request->password;
        $utilizator->phonenumber = $request->phonenumber;
        $utilizator->address = $request->address;
        $utilizator->type = $request->type;
        $utilizator->save();
        return redirect()->route('/utilizatori');
    }

    public function destroy(Utilizator $utilizator)
    {
        $utilizator->delete();
        return redirect()->route('/utilizatori');
    }
}
