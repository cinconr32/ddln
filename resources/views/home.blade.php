@extends('layouts.main')

@section('tables')

    <div class="card bg-light shadow p-3 mb-3 bg-body rounded">
        <h1 class="d-flex justify-content-center">DATA PENJUALAN</h1>
    </div>

    <div class="card bg-light shadow p-3 bg-body rounded">
        <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#dashboard" data-slide-to="0" class="active"></li>
            <li data-target="#databarang" data-slide-to="1"></li>
            <li data-target="#tambahbarang" data-slide-to="2"></li>
            <li data-target="#tambahstock" data-slide-to="3"></li>
            <li data-target="#riwayatbarang" data-slide-to="4"></li>
            <li data-target="#formpenjualan" data-slide-to="5"></li>
            <li data-target="#datapenjualan" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/01.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Dashboard</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/02.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Data Barang</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/03.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Tambah Barang</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/04.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Tambah Stock</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/05.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Riwayat Barang</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/06.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Form Penjualan</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/07.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Data Penjualan</h5>
                </div>
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
    </div>

@endsection