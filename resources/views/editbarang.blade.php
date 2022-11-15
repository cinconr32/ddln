@extends('layouts.main')

@section('tables')

    <div class="card bg-warning">
        <div class="box-header with-border row justify-content-center">
            <h3 class="font-weight-bold m-3">FORM EDIT BARANG</h3>
        </div>

        <div class="card">
            <form class="m-2" method="post" action="{{ route('databarang.update', $barang->id) }}">
                @csrf
                @method('patch')
                <input type="hidden" name="id" id="id" value="{{ $barang->id }}">

                <div class="form-group">
                    <label class="font-weight-bolder" for="namabarang">NAMA BARANG</label>
                    <input type="text" class="form-control @error('namabarang') is-invalid @enderror" id="namabarang" name="namabarang" value="{{ $barang->namabarang }}" >
                    @error('namabarang')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
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
                    <label class="font-weight-bolder" for="hargamodal">HARGA BELI</label>
                    <input type="text" class="form-control @error('hargamodal') is-invalid @enderror" id="hargamodal" name="hargamodal" value="{{ $barang->hargamodal }}">
                    @error('hargamodal')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bolder" for="hargajual">HARGA JUAL</label>
                    <input type="text" class="form-control @error('hargajual') is-invalid @enderror" id="hargajual" name="hargajual" value="{{ $barang->hargajual }}">
                    @error('hargajual')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
                </div>

                <div>
                    <label class="font-weight-bolder" for="stock">STOCK</label>
                    <input type="text" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{ $barang->stock }}">
                    @error('stock')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
                </div>

                <div class="row justify-content-end">
                    <button type="button" onclick="history.back()" class="btn btn-secondary m-1 mt-4">Back</button>
                    <button type="submit" class="btn btn-primary m-1 mr-3 mt-4">Submit</button>
                </div>

            </form>
        </div>
        
    </div>

@endsection