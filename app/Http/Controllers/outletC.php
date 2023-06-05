<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\outletM; 

class outletC extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produksi = outletM::all();
        return view('dashboard.outlet.index', 
        compact('outlet'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.outlet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        outletM::create($request->all());
        return redirect('/outlet');
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
        $outlet = outletM::find($id);
        return view('dashboard.outlet.edit', compact('outlet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produksi = outletM ::find($id);
        $produksi ->update($request->all());
        return redirect('/outlet ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $outlet = outletM::find($id);
        $outlet->delete();
        return redirect('/outlet');
    }
}
