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
        return view('tables.databarang')->with([
            'barangs' => Barang::all(),
            'title' => 'Data Barang'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tables.tambahbarang')->with([
            'title' => 'Tambah Barang'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namabarang' => 'required',
            'jenisbarang' => 'required',
            'hargamodal' => 'required|numeric',
            'hargajual' => 'required|numeric',
            'stock' => 'required|numeric'
        ]);

        Barang::create($validatedData);

        return redirect('/databarang')->with('success', 'Data berhasil ditambahkan!');
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
    public function edit($id)
    {
        return view('tables.editbarang')->with([
            'barang' => Barang::find($id),
            'title' => 'Edit Data Barang'
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

        return redirect('/databarang')->with('info', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::destroy($id);

        return back()->with('warning', 'Data berhasil dihapus!');
    }
}
