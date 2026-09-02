<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    /**
     * Menampilkan semua data stok.
     */
    public function index()
    {
        $stoks = Stok::all();

        return view('stok.index', compact('stoks'));
    }

    /**
     * Menampilkan form tambah barang.
     */
    public function create()
    {
        return view('stok.create');
    }

    /**
     * Menyimpan data barang baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|unique:stoks,kode_barang',
            'nama_barang' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer|min:0',
        ]);

        Stok::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect()
            ->route('stok.index')
            ->with('success', 'Data barang berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail satu barang.
     */
    public function show(Stok $stok)
    {
        return view('stok.show', compact('stok'));
    }

    /**
     * Menampilkan form edit barang.
     */
    public function edit(Stok $stok)
    {
        return view('stok.edit', compact('stok'));
    }

    /**
     * Memperbarui data barang.
     */
    public function update(Request $request, Stok $stok)
    {
        $request->validate([
            'kode_barang' => 'required|unique:stoks,kode_barang,' . $stok->id,
            'nama_barang' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer|min:0',
        ]);

        $stok->update([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect()
            ->route('stok.index')
            ->with('success', 'Data barang berhasil diperbarui.');
    }

    /**
     * Menghapus data barang.
     */
    public function destroy(Stok $stok)
    {
        $stok->delete();

        return redirect()
            ->route('stok.index')
            ->with('success', 'Data barang berhasil dihapus.');
    }
}

