<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutRequest;
use App\Models\About;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();

        return view('dashboard.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'slugabout' => 'required',
        ],[
            // 'thumbabout1.required' => 'Foto tidak boleh kosong.',
            'slugabout.required' => 'Keterangan harus diisi.',
        ]);

        if ($request->hasFile('thumbabout1')) {
            $validatedData['thumbabout1'] = $request->file('thumbabout1')->store('files');
        }
        if ($request->hasFile('thumbabout2')) {
            $validatedData['thumbabout2'] = $request->file('thumbabout2')->store('files');
        }
        if ($request->hasFile('thumbabout3')) {
            $validatedData['thumbabout3'] = $request->file('thumbabout3')->store('files');
        }
        if ($request->hasFile('thumbabout4')) {
            $validatedData['thumbabout4'] = $request->file('thumbabout4')->store('files');
        }

        // About::create($validatedData);
        // return $request->file('thumbabout1')->store('files');
        try {
            About::create($request->validated());
            return redirect()->route('about.index')->with('success', 'Berhasil menambahkan About');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal menambahkan About: ' . $th->getMessage());
        }
    }

    public function messages()
    {
        return [
            'thumbabout1.required' => 'Gambar 1 harus diisi',
            'thumbabout1.image' => 'Gambar 1 harus berupa gambar',
            'thumbabout1.max' => 'Ukuran gambar maksimal 4MB',
            'thumbabout1.mimes' => 'Gambar harus format JPG,PNG atau SVG',
            'thumbabout2.required' => 'Gambar 2 harus diisi',
            'thumbabout2.image' => 'Gambar 2 harus berupa gambar',
            'thumbabout2.max' => 'Ukuran gambar maksimal 4MB',
            'thumbabout2.mimes' => 'Gambar harus format JPG,PNG atau SVG',
            'thumbabout3.required' => 'Gambar 3 harus diisi',
            'thumbabout3.image' => 'Gambar 3 harus berupa gambar',
            'thumbabout3.max' => 'Ukuran gambar maksimal 4MB',
            'thumbabout3.mimes' => 'Gambar harus format JPG,PNG atau SVG',
            'thumbabout4.required' => 'Gambar 4 harus diisi',
            'thumbabout4.image' => 'Gambar 4 harus berupa gambar',
            'thumbabout4.max' => 'Ukuran gambar maksimal 4MB',
            'thumbabout4.mimes' => 'Gambar harus format JPG,PNG atau SVG',
            'slugabout.required' => 'Tentang Hotel harus diisi',
            'slugabout.string' => 'Tentang Hotel harus berupa string',
        ];

    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('dashboard.about.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
