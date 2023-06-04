<?php

namespace App\Http\Controllers;
use App\Models\jadwal;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtjadwal = jadwal::all();
        //ini nama file
        return view ('jadwal', compact ('dtjadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('jadwal-entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                
        jadwal::create([
            'id_jadwal'=> $request->id_jadwal,
            'hari'=> $request->hari,
            'id_supir'=> $request->id_supir,
            'id_barang'=> $request->id_barang,
            'id_pengiriman'=> $request->id_pengiriman,
        ]);
        return redirect('jadwal')->with('success', 'Data  Berhasil Ditambahkan!');
    }

    public function downloadpdf()
    {
        $data = jadwal::all();

        view()->share('data', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('jadwal-cetak', $data));
        
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream('Laporan-Jadwal.pdf');   
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
    public function edit(string $id)
    {
        $peg = jadwal ::findorfail($id);
        return view ('jadwal-edit', compact('peg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $peg = jadwal::findorfail($id);
        $peg->update($request->all());
        return redirect('jadwal')->with('success', 'Data  Berhasil DiUpdate!');
    }

    public function delete(string $id)
    {
        $dt = jadwal::findorfail($id);
        $dt->delete();
        return redirect('jadwal')->with('success', 'Data  Berhasil Di Hapus!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
