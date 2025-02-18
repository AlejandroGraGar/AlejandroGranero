<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruta;

class FruteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frutas = Fruta::all();
        return view('inicio', compact('frutas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'temporada' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',            
            'stock' => 'required|numeric|min:0'            
        ]);
        Fruta::create($validatedData);
        return redirect()->route('frutas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fruta = Fruta::findOrFail($id); 
        return view('editar', compact('fruta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'temporada' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);
        Fruta::findOrFail($id)->update($request->all());
        return redirect()->route('frutas.index');       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Fruta::findOrFail($id)->delete();
        return redirect()->route('frutas.index');
    }
}
