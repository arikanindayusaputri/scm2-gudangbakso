<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\gudangbaksoM; 

class gudangbaksoC extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produksi = gudangbaksoM::all();
        return view('dashboard.gudangbakso.index', 
        compact('gudangbakso'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.gudangbakso.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        gudangbaksoM::create($request->all());
        return redirect('/gudangbakso');
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
        $gudangbakso = gudangbaksoM::find($id);
        return view('dashboard.gudangbakso.edit', compact('gudangbakso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produksi = gudangbaksoM ::find($id);
        $produksi ->update($request->all());
        return redirect('/gudangbakso ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gudangbakso = gudangbaksoM::find($id);
        $gudangbakso->delete();
        return redirect('/gudangbakso');
    }
}
