@extends('layouts.main')

@section('tables')
    
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="fa-solid fa-boxes-stacked"></i>
                </div>
                <p class="card-category">Barang Tersedia</p>
                <h3 class="card-title">{{ $barangstotal }}
                <small>PCS</small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="fa-solid fa-eye"></i>
                    <a href="{{ route('databarang.index') }}">Lihat Detail...</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="fa-solid fa-cubes-stacked"></i>
                </div>
                <p class="card-category">Barang Masuk</p>
                <h3 class="card-title">{{ $barangmasuk = $barangstotal + $stockstotal }}
                <small>PCS</small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="fa-solid fa-eye"></i>
                    <a href="{{ route('stock.index') }}">Lihat Detail...</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="fa-brands fa-stack-overflow"></i>
                </div>
                <p class="card-category">Barang Keluar</p>
                <h3 class="card-title">{{ $jualstotal }}
                <small>PCS</small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="fa-solid fa-eye"></i>
                    <a href="{{ route('penjualan.index') }}">Lihat Detail...</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="fa-solid fa-sack-dollar"></i>
                </div>
                <p class="card-category">Total Penjualan</p>
                <h3 class="card-title">
                <small>Rp</small>
                {{ number_format($penjualan) }}
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="fa-solid fa-eye"></i>
                    <a href="{{ route('penjualan.index') }}">Lihat Detail...</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection