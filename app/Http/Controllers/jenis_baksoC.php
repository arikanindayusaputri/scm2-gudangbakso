<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\jenisbaksoM; 

class jenis_baksoC extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produksi = jenisbaksoM::all();
        return view('dashboard.jenis_bakso.index', 
        compact('jenisbakso'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.jenis_bakso.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        jenisbaksoM::create($request->all());
        return redirect('/jenisbakso');
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
        $jenisbakso = jenisbaksoM::find($id);
        return view('dashboard.jenisbakso.edit', compact('jenisbakso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produksi = jenisbaksoM ::find($id);
        $produksi ->update($request->all());
        return redirect('/jenisbakso ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jenisbakso = jenisbaksoM::find($id);
        $jenisbakso->delete();
        return redirect('/jenisbakso');
    }
}
