<?php

namespace App\Http\Controllers;
use App\Models\outlet;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class OutletController extends Controller
{
    public function index()
    {
        $dtoutlet = outlet::all();
        //ini nama file
        return view ('outlet', compact ('dtoutlet'));
    }

    public function create()
    {
        return view ('outlet-entry');
    }

    public function store(Request $request)
    {
        outlet::create([
            'id_outlet'=> $request->id_outlet,
            'nama'=> $request->nama,
            'alamat'=> $request->alamat,
            'no_hp'=> $request->no_hp,
            'id_barang'=> $request->id_barang,
        ]);
        return redirect('outlet')->with('success', 'Data  Berhasil Ditambahkan!');
    }

    public function edit(string $id)
    {
        $peg = outlet ::findorfail($id);
        return view ('outlet-edit', compact('peg'));
    }

    public function update(Request $request, string $id)
    {
        $peg = outlet::findorfail($id);
        $peg->update($request->all());
        return redirect('outlet')->with('success', 'Data  Berhasil DiUpdate!');
    }

    public function delete(string $id)
    {
        $dt = outlet::findorfail($id);
        $dt->delete();
        return redirect('outlet')->with('success', 'Data  Berhasil Di Hapus!');
    }

    public function downloadpdf()
    {
        $data = outlet::all();

        view()->share('data', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('outlet-cetak', $data));
        
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream('Laporan-Outlet.pdf');   
    }
}
