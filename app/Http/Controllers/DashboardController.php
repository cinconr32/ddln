<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Stock;
use App\Models\JualSatuan;

class DashboardController extends Controller
{
    public function index()
    {
        return view('tables.dashboard')->with([
            'barangstotal' => Barang::sum('stock'),
            'stockstotal' => Stock::sum('jumlah'),
            'jualstotal' => JualSatuan::sum('jumlah'),
            'penjualan' => JualSatuan::sum('nominalbayar'),
            'title' => 'Dashboard'
        ]);
    }
}
