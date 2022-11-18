<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateStockRequest;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tables.stock')->with([
            'stocks' => Stock::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tables.tambahstock')->with([
            'barangs' => Barang::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStockRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = Barang::find($request->barang);

        $validatedData = $request->validate([
            'barang' => 'required',
            'jumlah' => 'required|numeric'
        ]);

        $validatedData['barang_id'] = $request->barang;

        Stock::create($validatedData);

        Barang::where('id', $request->barang)
        ->update(['stock' => $barang->stock + $request->jumlah]);

        return redirect('/stock')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStockRequest  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStockRequest $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
    }
}
