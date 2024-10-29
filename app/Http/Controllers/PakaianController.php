<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pakaian;
use Illuminate\Http\Request;

class PakaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pakaian = Pakaian::with('kategori_id');

        return view('dashboard.pakaian.index', compact('pakaian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();

        return view('dashboard.pakaian.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pakaian $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pakaian $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pakaian $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pakaian $id)
    {
        //
    }
}
