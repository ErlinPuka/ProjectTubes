<?php

namespace App\Http\Controllers;
use App\Models\employee;
// use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use PDF;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtemployee = employee::all();
        //ini nama file
        return view ('employee', compact ('dtemployee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('employee-entry');
    }

    public function downloadpdf()
    {
        $data = employee::all();

        view()->share('data', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('employee-cetak', $data));
        
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream('laporan-Employee.pdf');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        employee::create([
            'id_pegawai'=> $request->id_pegawai,
            'nama'=> $request->nama,
            'divisi'=> $request->divisi,
            'no_hp'=> $request->no_hp,
            'id_supir'=> $request->id_supir,
        ]);
        return redirect('employee')->with('success', 'Data  Berhasil Ditambahkan!');
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
        $peg = employee ::findorfail($id);
        return view ('employee-edit', compact('peg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $peg = employee::findorfail($id);
        $peg->update($request->all());
        return redirect('employee')->with('success', 'Data  Berhasil DiUpdate!');
    }

    public function delete(string $id)
    {
        $dt = employee::findorfail($id);
        $dt->delete();
        return redirect('employee')->with('success', 'Data  Berhasil Di Hapus!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
