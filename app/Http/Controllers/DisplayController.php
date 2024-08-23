<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDisplayRequest;
use App\Models\Display;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $displays = Display::all();

        return view('dashboard.display.index', compact('displays'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.display.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'keterangan' => 'required',
        ],[
            // 'display1.required' => 'Foto tidak boleh kosong.',
            'keterangan.required' => 'Keterangan harus diisi.',
        ]);

        if ($request->hasFile('display1')) {
            $validatedData['display1'] = $request->file('display1')->store('files', 'public');
        }
        if ($request->hasFile('display2')) {
            $validatedData['display2'] = $request->file('display2')->store('files', 'public');
        }
        if ($request->hasFile('display3')) {
            $validatedData['display3'] = $request->file('display3')->store('files', 'public');
        }
        if ($request->hasFile('display4')) {
            $validatedData['display4'] = $request->file('display4')->store('files', 'public');
        }
        try {
            Display::create($validatedData);
            return redirect()->route('dashboard.display.index')->with('success', 'Berhasil menambahkan Display');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal menambahkan Display: ' . $th->getMessage());
        }
    }

    public function messages()
    {
        return [
            'display1.required' => 'Gambar 1 harus diisi',
            'display1.image' => 'Gambar 1 harus berupa gambar',
            'display1.max' => 'Ukuran gambar maksimal 4MB',
            'display1.mimes' => 'Gambar harus format JPG,PNG atau SVG',
            'display2.required' => 'Gambar 2 harus diisi',
            'display2.image' => 'Gambar 2 harus berupa gambar',
            'display2.max' => 'Ukuran gambar maksimal 4MB',
            'display2.mimes' => 'Gambar harus format JPG,PNG atau SVG',
            'display3.required' => 'Gambar 3 harus diisi',
            'display3.image' => 'Gambar 3 harus berupa gambar',
            'display3.max' => 'Ukuran gambar maksimal 4MB',
            'display3.mimes' => 'Gambar harus format JPG,PNG atau SVG',
            'display4.required' => 'Gambar 4 harus diisi',
            'display4.image' => 'Gambar 4 harus berupa gambar',
            'display4.max' => 'Ukuran gambar maksimal 4MB',
            'display4.mimes' => 'Gambar harus format JPG,PNG atau SVG',
            'keterangan.required' => 'Tentang Hotel harus diisi',
            'keterangan.string' => 'Tentang Hotel harus berupa string',
        ];

    }

    /**
     * Display the specified resource.
     */
    public function show(Display $Display)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Display $Display)
    {
        return view('dashboard.display.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Display $Display)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Display $Display)
    {
        //
    }
}
