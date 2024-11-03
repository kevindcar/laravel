<?php

namespace App\Http\Controllers;

use App\Models\moto;
use Illuminate\Http\Request;

class motoController extends Controller
{
    public function index()
    {
        $motos = moto::all();
        return view('motos.index', compact('motos'));
    }

    public function show($id)
    {
        $moto = moto::findOrFail($id);
        return view('motos.show', compact('moto'));
    }

    public function create()
    {
        return view('motos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required|string|max:100',
            'model' => 'required|string|max:100',
            'year' => 'required|integer',
            'type' => 'required|string',
            'description' => 'nullable|string',
            'image_url' => 'nullable|url'
        ]);

        moto::create($request->all());

        return redirect()->route('motos.index');
    }
}
