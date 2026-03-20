<?php

namespace App\Http\Controllers;

use App\Models\Boat;
use Illuminate\Http\Request;

class BoatController extends Controller
{
    public function index()
    {
        $boats = Boat::latest()->paginate(5);

        return view('boats.index', compact('boats'));
    }

    public function create()
    {
        return view('boats.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'boat_name' => 'required',
            'boat_type' => 'required',
            'capacity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        Boat::create($request->all());

        return redirect()->route('boats.index')
            ->with('success', 'Boat created successfully.');
    }

    public function show(Boat $boat)
    {
        return view('boats.show', compact('boat'));
    }

    public function edit(Boat $boat)
    {
        return view('boats.edit', compact('boat'));
    }

    public function update(Request $request, Boat $boat)
    {
        $request->validate([
            'boat_name' => 'required',
            'boat_type' => 'required',
            'capacity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $boat->update($request->all());

        return redirect()->route('boats.index')
            ->with('success', 'Boat updated successfully.');
    }

    public function destroy(Boat $boat)
    {
        $boat->delete();

        return redirect()->route('boats.index')
            ->with('success', 'Boat deleted successfully.');
    }
}