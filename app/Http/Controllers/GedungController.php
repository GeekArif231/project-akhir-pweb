<?php

namespace App\Http\Controllers;

use App\Models\Gedung;  
use App\Models\Alamat;
use Illuminate\Http\Request;

class GedungController extends Controller
{
    public function create()
    {
        $alamat = Alamat::all(); // Ambil semua alamat
        return view('gedung.create', compact('alamat'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_gedung' => 'required',
            'deskripsi' => 'required',
            'kapasitas' => 'required|integer',
            'harga_internal' => 'required|numeric',
            'harga_eksternal' => 'required|numeric',
            'alamat_id' => 'required|exists:alamat,id',
            'gambar_gedung' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('gambar_gedung')) {
            $validated['gambar_gedung'] = $request->file('gambar_gedung')->store('gedung_images', 'public');
        }

        Gedung::create($validated);

        return redirect()->route('gedung.index')->with('status', 'Gedung berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $gedung = Gedung::findOrFail($id);
        $alamat = Alamat::all();
        return view('gedung.edit', compact('gedung', 'alamat'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_gedung' => 'required',
            'deskripsi' => 'required',
            'kapasitas' => 'required|integer',
            'harga_internal' => 'required|numeric',
            'harga_eksternal' => 'required|numeric',
            'alamat_id' => 'required|exists:alamat,id',
            'gambar_gedung' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $gedung = Gedung::findOrFail($id);

        // if ($request->hasFile('gambar_gedung')) {
        //     // Hapus gambar lama jika ada
        //     if ($gedung->gambar_gedung) {
        //         Storage::delete('public/' . $gedung->gambar_gedung);
        //     }
        //     $validated['gambar_gedung'] = $request->file('gambar_gedung')->store('gedung_images', 'public');
        // }

        $gedung->update($validated);

        return redirect()->route('gedung.index')->with('status', 'Gedung berhasil diperbarui!');
    }

}
