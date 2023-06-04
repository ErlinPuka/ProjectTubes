<?php

namespace App\Http\Controllers;
use App\Models\transportasi;
use Illuminate\Http\Request;

class TransportasiController extends Controller
{
    public function index()
    {
        $dttransportasi = transportasi::all();
        //ini nama file
        return view ('transportasi', compact ('dttransportasi'));
    }

    public function create()
    {
        return view ('transportasi-entry');
    }

    public function store(Request $request)
    {
        transportasi::create([
            'id_pengiriman'=> $request->id_pengiriman,
            'nama'=> $request->nama,
            'jenis'=> $request->jenis,
            'berat_muatan'=> $request->berat_muatan,
            'id_supir'=> $request->id_supir,
        ]);
        return redirect('transportasi')->with('success', 'Data  Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        
        $peg = transportasi ::findorfail($id);
        return view ('transportasi-edit', compact('peg'));
    }

    public function update(Request $request, string $id)
    {
        $peg = transportasi::findorfail($id);
        $peg->update($request->all());
        return redirect('transportasi')->with('success', 'Data  Berhasil DiUpdate!');
    }

    public function delete(string $id)
    {
        $dt = transportasi::findorfail($id);
        $dt->delete();
        return redirect('transportasi')->with('success', 'Data  Berhasil Di Hapus!');
    }
}
