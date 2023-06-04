<?php

namespace App\Http\Controllers;
use App\Models\werehouse;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class werehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtwerehouse = werehouse::all(); 
        //ini nama file
        return view ('Werehouse', compact ('dtwerehouse'));
    }

    public function downloadpdf()
    {
        $data = werehouse::all();

        view()->share('data', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('werehouse-cetak', $data));
        
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream('Laporan-Werehouse.pdf');   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('werehouse-entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        werehouse::create([
            'nama'=> $request->nama,
            'jenisproduk'=> $request->jenisproduk,
            'harga'=> $request->harga,
            'produksi'=> $request->produksi,
            'expired'=> $request->expired,
            'lokasi'=> $request->lokasi,
        ]);
        return redirect('Werehouse')->with('success', 'Data  Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $peg = Werehouse ::findorfail($id);
        return view ('werehouse-edit', compact('peg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $peg = werehouse::findorfail($id);
        $peg->update($request->all());
        return redirect('Werehouse')->with('success', 'Data  Berhasil DiUpdate!');
    }

    public function delete(string $id)
    {
        $dt = werehouse::findorfail($id);
        $dt->delete();
        return redirect('Werehouse')->with('success', 'Data  Berhasil Di Hapus!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
