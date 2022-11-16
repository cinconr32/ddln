<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('databarang')->with([
            "barangs" => Barang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahbarang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namabarang' => 'required',
            'jenisbarang' => 'required',
            'hargamodal' => 'required|numeric',
            'hargajual' => 'required|numeric',
            'stock' => 'required|numeric'
        ]);

        $barang = new Barang;
        $barang->namabarang = $request->namabarang;
        $barang->jenisbarang = $request->jenisbarang;
        $barang->hargamodal = $request->hargamodal;
        $barang->hargajual = $request->hargajual;
        $barang->stock = $request->stock;
        $barang->save();

        return redirect('/databarang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang, $id)
    {
        // return view('editbarang', [
        //     "barang" => $barang
        // ]);
        return view('editbarang')->with([
            'barang' => Barang::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $rules = ([
            'namabarang' => 'required',
            'jenisbarang' => 'required',
            'hargamodal' => 'required|numeric',
            'hargajual' => 'required|numeric',
            'stock' => 'required|numeric'
        ]);

        // if($request->namabarang != $barang->namabarang) {
        //     $rules['namabarang'] = 'required|unique:barangs';
        // }

        $validatedData = $request->validate($rules);
        
        Barang::where('id', $request->id)
                ->update($validatedData);

        return redirect('/databarang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang, $id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return back();
    }
}
