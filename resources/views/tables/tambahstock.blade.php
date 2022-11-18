@extends('layouts.main')

@section('tables')
    
<div class="card bg-warning">
    <div class="box-header with-border row justify-content-center">
        <h3 class="font-weight-bold m-3">FORM TAMBAH STOCK BARANG</h3>
    </div>

    <div class="card">
        <form class="m-2" method="post" action="{{ route('stock.store') }}">
            @csrf
            <div class="form-group">
                <label class="font-weight-bolder">PILIH BARANG</label>
                <select class="custom-select @error('barang') is-invalid @enderror" name="barang" required>
                    <option disabled selected hidden>--PILIH BARANG--</option>
                    @foreach( $barangs as $barang )

                    <option value="{{ $barang->id }}">{{ $barang->namabarang }}</option>

                    @endforeach
                </select>
                @error('barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <label class="font-weight-bolder" for="jumlah">JUMLAH BARANG</label>
                <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" placeholder="silahkan isi jumlah..." required>
                @error('jumlah')
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