<?php

namespace App\Http\Controllers;

use App\Models\JualSatuan;
use App\Models\Barang;
use Illuminate\Http\Request;

class JualSatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tables.datapenjualan')->with([
            'datapenjualan' => JualSatuan::with(['barang'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tables.formpenjualan')->with([
            'barangs' => Barang::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJualSatuanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Barang $barang)
    {
        $barang = Barang::find($request->barang);

        $validatedData = $request->validate([
            'hargajual' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'nominalbayar' => 'required|numeric'
        ]);

        $validatedData['barang_id'] = $request->barang;
        
        if( $request->jumlah <= $barang->stock ) {
            JualSatuan::create($validatedData);
            
            Barang::where('id', $request->barang)
            ->update(['stock' => $barang->stock - $request->jumlah]);
            
            return redirect('/penjualan')->with('success', 'Data berhasil ditambahkan!');
        }

        else {
            return back()->with('danger', 'Stock tidak mencukupi!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JualSatuan  $jualSatuan
     * @return \Illuminate\Http\Response
     */
    public function show(JualSatuan $jualSatuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JualSatuan  $jualSatuan
     * @return \Illuminate\Http\Response
     */
    public function edit(JualSatuan $jualSatuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJualSatuanRequest  $request
     * @param  \App\Models\JualSatuan  $jualSatuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JualSatuan $jualSatuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JualSatuan  $jualSatuan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JualSatuan::destroy($id);

        return back()->with('warning', 'Data berhasil dihapus!');
    }

    public function checkHargaModal(Request $request, Barang $barang)
    {
        $barang = Barang::find($request->namabarang);
        $hargajual = $barang->hargajual;

        return response()->json(['hargajual' => $hargajual]);
    }
}
