<?php

namespace App\Http\Controllers;
use App\Models\customer;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtcustomer = customer::all();
        //ini nama file
        return view ('customer', compact ('dtcustomer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('customer-entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        customer::create([
            'id_customer'=> $request->id_customer,
            'nama'=> $request->nama,
            'alamat'=> $request->alamat,
            'no_hp'=> $request->no_hp,
        ]);
        return redirect('customer')->with('success', 'Data  Berhasil Ditambahkan!');
    }

    public function downloadpdf()
    {
        $data = customer::all();

        view()->share('data', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('customer-cetak', $data));
        
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream('Laporan-Customer.pdf');   
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
        $peg = customer ::findorfail($id);
        return view ('customer-edit', compact('peg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $peg = customer::findorfail($id);
        $peg->update($request->all());
        return redirect('customer')->with('success', 'Data  Berhasil DiUpdate!');
    }

    public function delete(string $id)
    {
        $dt = customer::findorfail($id);
        $dt->delete();
        return redirect('customer')->with('success', 'Data  Berhasil Di Hapus!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
