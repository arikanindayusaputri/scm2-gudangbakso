<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\loginM;

class biaya_produksiC extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produksi = loginM::all();
        return view('dashboard.login.index', 
        compact('login'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.login.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        loginM::create($request->all());
        return redirect('/biayaproduksi');
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
        $login = loginM::find($id);
        return view('dashboard.login.edit', compact('login'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produksi = loginM ::find($id);
        $produksi ->update($request->all());
        return redirect('/login ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $login = loginM::find($id);
        $login->delete();
        return redirect('/login');
    }
}
