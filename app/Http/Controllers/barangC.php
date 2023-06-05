<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\barangM;

class barangC extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produksi = barangM::all();
        return view('dashboard.barang.index', 
        compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        barangM::create($request->all());
        return redirect('/barang');
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
        $barang = barangM::find($id);
        return view('dashboard.barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produksi = barangM ::find($id);
        $produksi ->update($request->all());
        return redirect('/barang ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = barangM::find($id);
        $barang->delete();
        return redirect('/barang');
    }
}
