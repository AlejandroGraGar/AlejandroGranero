<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Models\Libro;

class LibrosController extends Controller {
    public function index() {
        $libros = Libro::all();
        return view('libros.index', compact('libros')); 
    }


    public function show() {
        $libros = Libro::all();
        return view('libros.index', compact('libros')); 
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
            'titulo' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0'            
        ]);
        Libro::create($validatedData);
        return redirect()->route('libros.index');


    }

    /**
     * Display the specified resource.
     */


    public function filtrarId($id){
        $libros = Libros::findOrFail($id); 
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $libro = Libro::findOrFail($id); 
        return view('libros.edit', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'anio' => 'required|integer',
            'descripcion' => 'nullable|string'
        ]);
    
        $libro = Libro::findOrFail($id);
        $libro->update($validatedData);
    
        return redirect()->route('libros.index')->with('success', 'Todo correcto');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      
        Libro::findOrFail($id)->delete();
        return redirect()->route('libros.index');
    }
}
