<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Rak;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class RakController extends Controller
{
    public function index(): View
    {
       $dataRak = Rak::latest()->paginate(10);
       return view('rak.index',compact('dataRak'));
    }

    public function create(): View
    {
        return view('rak.create');
    }

    public function store(Request $request): RedirectResponse
    {
       
        //validate form
        // $request->validate([
        //     'lokasi_rak'      => 'required|min:2|unique:rak,lokasi_rak'
        // ]);

       $data = Rak::create([
            'lokasi_rak'        => $request->lokasi_rak,
        ]);
        //redirect to index
        return redirect()->route('rak.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(int $kd_rak): View
    {
        $dataRak = Rak::where('kd_rak' ,$kd_rak)->first();
        return view('rak.edit', compact('dataRak'));
    }

    public function show(int $kd_rak): View
    {
        $rak = Rak::where('kd_rak' ,$kd_rak)->first();

        return view('rak.show', compact('rak'));
    }

    public function update(Request $request, $kd_rak): RedirectResponse
    {
        //validate form
        $request->validate([
            'lokasi_rak'      => 'required|min:2'
        ]);

        $dataRak = Rak::where('kd_rak' ,$kd_rak)->first();
        $dataRak->update([
             'lokasi_rak'  => $request->lokasi_rak
            ]);

        return redirect()->route('rak.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($kd_rak): RedirectResponse
    {
        $rak = Rak::where('kd_rak' ,$kd_rak)->first(); 
        $rak->delete();
        return redirect()->route('rak.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
