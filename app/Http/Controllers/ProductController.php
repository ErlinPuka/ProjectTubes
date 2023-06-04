<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\product;
use Dompdf\Dompdf;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtproduct = product::all();
        //ini nama file
        return view ('products', compact ('dtproduct'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('products-entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $nm =$request->gambar;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension();

        $dtUpload = new product;
        $dtUpload->jenis = $request->jenis;
        $dtUpload->gambar = $namaFile;
        $dtUpload->ukuran = $request->ukuran;
        $dtUpload->harga = $request->harga;

        $nm->move(public_path().'/img', $namaFile);
        $dtUpload->save();

        return redirect('products')->with('success', 'Product Berhasil Ditambahkan!');

    }

    public function downloadpdf()
    {
        $data = product::all();

        view()->share('data', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('products-cetak', $data));
        
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream('Laporan-Product.pdf');   
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
        $dt = product::findorfail($id);
        return view ('products-edit', compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ubah = product::findorfail($id);
        $awal = $ubah->gambar;

        $dt=[
            'nama'=> $request['nama'],
            'gambar'=>$awal,
        ];

        $request->gambar->move(public_path().'/img',$awal);
        $ubah->update($dt);
        return redirect('products')->with('success', 'Data  Berhasil DiUpdate!');
    }

    public function delete(string $id)
    {
        $dt = product::findorfail($id);
        $dt->delete();
        return redirect('products')->with('success', 'Data  Berhasil Di Hapus!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
