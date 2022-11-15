@extends('layouts.main')

@section('tables')

    <div class="card bg-warning">
        <div class="box-header with-border row justify-content-center">
            <h3 class="font-weight-bold m-3">FORM TAMBAH BARANG</h3>
        </div>

        <div class="card">
            <form class="m-2" method="post" action="{{ route('databarang.store') }}">
                @csrf
                <div class="form-group">
                    <label class="font-weight-bolder">NAMA BARANG</label>
                    <input type="text" class="form-control @error('namabarang') is-invalid @enderror" name="namabarang" placeholder="silahkan isi nama barang..." required>
                    @error('namabarang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bolder">JENIS BARANG</label>
                    <select class="custom-select" name="jenisbarang" required>
                        <option disabled selected hidden>pilih jenis barang...</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                    </select>            
                    @error('jenisbarang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bolder">HARGA MODAL</label>
                    <input type="text" class="form-control @error('hargamodal') is-invalid @enderror" name="hargamodal" placeholder="silahkan isi harga modal..." required>
                    @error('hargamodal')
                        <div class="invalid-feedback">
                             {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bolder">HARGA JUAL</label>
                    <input type="text" class="form-control @error('hargajual') is-invalid @enderror" name="hargajual" placeholder="silahkan isi harga jual..." required>
                    @error('hargajual')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label class="font-weight-bolder">STOCK</label>
                    <input type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" placeholder="silahkan isi jumlah stock..." required>
                    @error('stock')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row justify-content-end">
                    <button type="submit" class="btn btn-primary m-4">Submit</button>
                </div>

            </form>
        </div>
        
    </div>

@endsection