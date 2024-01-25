<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keuangan;

class KeuanganController extends Controller
{
    public function index()
    {
        $data = Keuangan::all();
        return view('keuangan.index', compact('data'));
    }

    public function create()
    {
        return view('keuangan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'required',
            'jumlah' => 'required|numeric',
            'tipe' => 'required|in:pengeluaran,pemasukan',
        ]);

        Keuangan::create($request->all());
        return redirect()->route('keuangan.index')->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $data = Keuangan::findOrFail($id);
        return view('keuangan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'keterangan' => 'required',
            'jumlah' => 'required|numeric',
            'tipe' => 'required|in:pengeluaran,pemasukan',
        ]);

        $data = Keuangan::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('keuangan.index')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $data = Keuangan::findOrFail($id);
        $data->delete();
        return redirect()->route('keuangan.index')->with('success', 'Data berhasil dihapus');
    }
}