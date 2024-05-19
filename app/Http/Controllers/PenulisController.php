<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Penulis;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PenulisController extends Controller
{
    public function index(): View
    {
       $dataPenulis = Penulis::latest()->paginate(10);
       return view('penulis.index',compact('dataPenulis'));
    }

    public function create(): View
    {
        return view('penulis.create');
    }

    public function store(Request $request): RedirectResponse
    {
       
        //validate form
        // $request->validate([
        //     'nama_penulis'      => 'required|min:2|unique:penulis,nama_penulis'
        // ]);

       $data = Penulis::create([
            'nama_penulis'        => $request->nama_penulis,
            'tempat_lahir'        => $request->tempat_lahir,
            'tgl_lahir'           => $request->tgl_lahir,
            'email'               => $request->email,
        ]);
        //redirect to index
        return redirect()->route('penulis.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(int $kd_penulis): View
    {
        $dataPenulis = Penulis::where('kd_penulis' ,$kd_penulis)->first();
        return view('penulis.edit', compact('dataPenulis'));
    }

    public function show(int $kd_penulis): View
    {
        $penulis = Rak::where('kd_penulis' ,$kd_rak)->first();

        return view('penulis.show', compact('penulis'));
    }

    public function update(Request $request, $kd_penulis): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_penulis'      => 'required|min:2',
            'tempat_lahir'      => 'required|min:2',
            'tgl_lahir'      => 'required|min:2',
            'email'      => 'required|min:2'
        ]);

        $dataPenulis = Penulis::where('kd_penulis' ,$kd_penulis)->first();
        $dataPenulis->update([
            'nama_penulis'        => $request->nama_penulis,
            'tempat_lahir'        => $request->tempat_lahir,
            'tgl_lahir'           => $request->tgl_lahir,
            'email'               => $request->email,
            ]);

        return redirect()->route('penulis.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($kd_penulis): RedirectResponse
    {
        $penulis = Penulis::where('kd_penulis' ,$kd_penulis)->first(); 
        $penulis->delete();
        return redirect()->route('penulis.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
