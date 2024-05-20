<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BukuController extends Controller
{
    public function index(): View
    {
       $dataBuku = Buku::latest()->paginate(10);
       return view('Buku.index',compact('dataBuku'));
    }

    public function create(): View
    {
        return view('Buku.create');
    }

    public function store(Request $request): RedirectResponse
    {
       
        //validate form
        // $request->validate([
        //     'no_buku'      => 'required|min:2|unique:buku,no_buku'
        // ]);

       $data = Buku::create([
            'judul'        => $request->judul,
            'edisi'        => $request->edisi,
            'tahun'           => $request->tahun,
            'penerbit'               => $request->penerbit,
        ]);
        //redirect to index
        return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(int $no_buku): View
    {
        $dataBuku = Buku::where('no_buku' ,$no_buku)->first();
        return view('buku.edit', compact('dataBuku'));
    }

    public function show(int $no_buku): View
    {
        $buku = Buku::where('no_buku' ,$no_buku)->first();

        return view('buku.show', compact('buku'));
    }

    public function update(Request $request, $no_buku): RedirectResponse
    {
        //validate form
        $request->validate([
            'no_buku'      => 'required|min:2',
            'judul'      => 'required|min:2',
            'tahun'      => 'required|min:2',
            'penerbit'      => 'required|min:2'
        ]);

        $dataBuku = Buku::where('no_buku' ,$no_buku)->first();
        $dataBuku->update([
            'no_buku'             => $request->no_buku,
            'judul'           => $request->judul,
            'tahun'                  => $request->tahun,
            'penerbit'               => $request->penerbit,
            ]);

        return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($no_buku): RedirectResponse
    {
        $buku = Buku::where('no_buku' ,$no_buku)->first(); 
        $buku->delete();
        return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
