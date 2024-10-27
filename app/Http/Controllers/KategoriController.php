<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Kategori a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();

        return view('dashboard.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_kategori' => 'required',
        ],[
            'nama_kategori.required' => 'Wajib mengisi Kategori.',
        ]);

        try {
            Kategori::create($validatedData);
            return redirect()->route('dashboard.kategori.index')->with('success', 'Berhasil menambahkan Kategori');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal menambahkan Kategori: ' . $th->getMessage());
        }
    }

    /**
     * Kategori the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = Kategori::findOrFail($id);

        return view('dashboard.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama_kategori' => 'required',
        ],[
            'nama_kategori.required' => 'Wajib mengisi Kategori.',
        ]);

        $kategori = Kategori::findOrFail($id);

        try {
            $kategori->update([
                'nama_kategori' => $request->nama_kategori,
            ]);
            return redirect()->route('dashboard.kategori.index')->with('success', 'Berhasil mengubah Kategori');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal mengubah Kategori: ' . $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        DB::beginTransaction();
        try {
            $kategori = Kategori::findOrFail($id);
            $kategori->delete();

            DB::commit();

            return redirect()->route('dashboard.kategori.index')->with('success', 'Data berhasil dihapus!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('dashboard.kategori.index')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
