<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TP;

class TpController extends Controller
{
    public function index()
    {
        $tp = TP::all();
        return view('index', ['tp' => $tp]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'sub_judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'tanggal_post' => 'required|string|max:255',
            'deadline' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
        ]);
        TP::create(['judul' => $request->judul, 'sub_judul' => $request->sub_judul, 'kategori' => $request->kategori, 'tanggal_post' => $request->tanggal_post, 'deadline' => $request->deadline, 'deskripsi' => $request->deskripsi]);
        return redirect()->route('tp.index')->with('success', 'Tugas pendahuluan berhasil ditambahkan.');
    }
    
    public function edit($id)
    {
        $tp = TP::findOrFail($id);
        return view('edit', ['tp' => $tp]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'sub_judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'tanggal_post' => 'required|string|max:255',
            'deadline' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
        ]);

        $tp = TP::findOrFail($id);
        $tp->update($request->all());

        return redirect()->route('tp.index')->with('success', 'Tugas pendahuluan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $tp = TP::findOrFail($id);
        $tp->delete();

        return redirect()->route('tp.index')->with('success', 'Tugas pendahuluan berhasil dihapus.');
    }
}
