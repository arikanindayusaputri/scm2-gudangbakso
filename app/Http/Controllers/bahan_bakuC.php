<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\bahan_bakuM;


class bahan_bakuC extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produksi = bahan_bakuM::all();
        return view('dashboard.bahan_baku.index', 
        compact('bahan_baku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.bahan_baku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        bahan_bakuM::create($request->all());
        return redirect('/bahanbaku');
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
        $bahan_baku = bahan_bakuM::find($id);
        return view('dashboard.bahan_baku.edit', compact('bahan_baku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produksi = bahan_bakuM ::find($id);
        $produksi ->update($request->all());
        return redirect('/bahanbaku ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bahan_baku = bahan_bakuM::find($id);
        $bahan_baku->delete();
        return redirect('/bahan_baku');
    }
}
