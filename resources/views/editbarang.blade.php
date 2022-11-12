@extends('layouts.main')

@section('tables')

    <div class="card bg-warning">
        <div class="box-header with-border row justify-content-center">
            <h3 class="font-weight-bold m-3">FORM EDIT BARANG</h3>
        </div>

        <div class="card">
            <form class="m-2" method="post" action="">
                <input type="hidden" name="id" id="input" value="{{ $barang->id }}">

                <div class="form-group">
                    <label class="font-weight-bolder" for="input">NAMA BARANG</label>
                    <input type="text" class="form-control" id="input" name="namabarang" value="{{ $barang->namabarang }}">
                </div>

                <div class="form-group">
                    <label class="font-weight-bolder">JENIS BARANG</label>
                    <div class="form-check">
                        <input type="radio" name="jenisbarang" {{ ($barang->jenisbarang === "Makanan") ? 'checked' : '' }} value="Makanan">
                        Makanan
                        <input type="radio" name="jenisbarang" {{ ($barang->jenisbarang === "Minuman") ? 'checked' : '' }} value="Minuman">
                        Minuman
                    </div>            
                </div>

                <div class="form-group">
                    <label class="font-weight-bolder" for="input">HARGA BELI</label>
                    <input type="text" class="form-control" id="input" name="hargamodal" value="{{ $barang->hargamodal }}">
                </div>

                <div class="form-group">
                    <label class="font-weight-bolder" for="input">HARGA JUAL</label>
                    <input type="text" class="form-control" id="input" name="hargajual" value="{{ $barang->hargajual }}">
                </div>

                <div>
                    <label class="font-weight-bolder" for="input">STOCK</label>
                    <input type="text" class="form-control" id="input" name="stock" value="{{ $barang->stock }}">
                </div>

                <div class="row justify-content-end">
                    <button type="button" onclick="history.back()" class="btn btn-secondary m-1 mt-4">Back</button>
                    <button type="submit" class="btn btn-primary m-1 mr-3 mt-4">Submit</button>
                </div>

            </form>
        </div>
        
    </div>

@endsection