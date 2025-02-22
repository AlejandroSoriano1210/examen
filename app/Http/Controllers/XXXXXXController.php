<?php

namespace App\Http\Controllers;

use App\Models\XXXXXX;
use Illuminate\Http\Request;

class XXXXXXController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('XXXXXXs.index', [
            'XXXXXXs' => XXXXXX::with('ejemplares')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('XXXXXXs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'XXX' => 'required|string|max:255',
            'XXXX' => 'required|string|max:255',
            'XXXXX' => 'required|string|max:255',
        ]);

        $XXXXXX = XXXXXX::create($validated);

        session()->flash('exito', 'XXXXXX creado correctamente.');
        
        return redirect()->route('XXXXXXs.show', $XXXXXX);
    }

    /**
     * Display the specified resource.
     */
    public function show(XXXXXX $XXXXXX)
    {
        return view('XXXXXXs.show', [
            'XXXXXX' => $XXXXXX,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(XXXXXX $XXXXXX)
    {
        return view('XXXXXXs.edit', [
            'XXXXXX' => $XXXXXX,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, XXXXXX $XXXXXX)
    {
        $validated = $request->validate([
            'XXX' => 'required|string|max:255',
            'XXXX' => 'required|string|max:255',
            'XXXXX' => 'required|string|max:255',
        ]);
        $XXXXXX->fill($validated);
        $XXXXXX->save();
        session()->flash('exito', 'XXXXXX modificado correctamente.');
        return redirect()->route('XXXXXXs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(XXXXXX $XXXXXX)
    {
        $XXXXXX->delete();
        session()->flash('exito', 'XXXXXX eliminado correctamente.');
        return redirect()->route('XXXXXXs.index');
    }
}
