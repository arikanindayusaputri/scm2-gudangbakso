<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\produksiM; 

class produksiC extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produksi = produksiM::all();
        return view('dashboard.produksi.index', 
        compact('produksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.produksi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        produksiM::create($request->all());
        return redirect('/produksi');
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
        $produksi = produksiM::find($id);
        return view('dashboard.produksi.edit', compact('produksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produksi = produksiM ::find($id);
        $produksi ->update($request->all());
        return redirect('/produksi ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produksi = produksiM::find($id);
        $produksi->delete();
        return redirect('/produksi');
    }
}
