<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        return view('databarang', [
            "barangs" => Barang::all()
        ]);
    }

    public function show(Barang $barang)
    {
        return view('editbarang', [
            "barang" => $barang
        ]);
    }
}
