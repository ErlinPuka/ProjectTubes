<?php

namespace App\Http\Controllers;
use App\Models\driver;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtdriver = driver::all();
        //ini nama file
        return view ('drivers', compact ('dtdriver'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('driver-entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        driver::create([
            'id_driver'=> $request->id_driver,
            'nama'=> $request->nama,
            'alamat'=> $request->alamat,
            'no_hp'=> $request->no_hp,
            'id_pegawai'=> $request->id_pegawai,
        ]);
        return redirect('drivers')->with('success', 'Data  Berhasil Ditambahkan!');
    }

    public function downloadpdf()
    {
        $data = driver::all();

        view()->share('data', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('driver-cetak', $data));
        
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream('Laporan-Drivers.pdf');   
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
        $peg = driver ::findorfail($id);
        return view ('driver-edit', compact('peg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $peg = driver::findorfail($id);
        $peg->update($request->all());
        return redirect('drivers')->with('success', 'Data  Berhasil DiUpdate!');
    }

    public function delete(string $id)
    {
        $dt = driver::findorfail($id);
        $dt->delete();
        return redirect('drivers')->with('success', 'Data  Berhasil Di Hapus!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
