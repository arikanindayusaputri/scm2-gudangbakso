<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\pegawaiM; 

class pegawaiC extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produksi = pegawaiM::all();
        return view('dashboard.pegawai.index', 
        compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        pegawaiM::create($request->all());
        return redirect('/pegawai');
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
        $pegawai = pegawaiM::find($id);
        return view('dashboard.pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produksi = pegawaiM ::find($id);
        $produksi ->update($request->all());
        return redirect('/pegawai ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = pegawaiM::find($id);
        $pegawai->delete();
        return redirect('/pegawai');
    }
}
