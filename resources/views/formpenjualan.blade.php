@extends('layouts.main')

@section('tables')
    
<div class="card bg-warning">
    <div class="box-header with-border row justify-content-center">
        <h3 class="font-weight-bold m-3">FORM PENJUALAN</h3>
    </div>

    <div class="card">
        <form class="m-2" method="post" action="{{ route('penjualan.store') }}">
            @csrf
            <div class="form-group">
                <label class="font-weight-bolder">PILIH BARANG</label>
                <select class="custom-select @error('barang') is-invalid @enderror" name="barang" id="barang" required>
                    <option disabled selected hidden>--PILIH BARANG--</option>
                    @foreach( $barangs as $barang )
                    <option value="{{ $barang->id }}">
                        {{ $barang->namabarang }}
                    </option>
                    @endforeach
                </select>
                @error('barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="">
                <label class="font-weight-bolder" for="hargajual">HARGA JUAL</label>
                <input type="text" class="form-control @error('hargajual') is-invalid @enderror" id="hargajual" name="hargajual" placeholder="silahkan masukkan nominal..." required readonly>
                @error('hargajual')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="pt-2">
                <label class="font-weight-bolder" for="jumlah">JUMLAH BARANG TERJUAL</label>
                <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" placeholder="silahkan isi jumlah..." required>
                @error('jumlah')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="pt-2">
                <label class="font-weight-bolder" for="nominalbayar">NOMINAL PEMBAYARAN</label>
                <input type="text" class="form-control @error('nominalbayar') is-invalid @enderror" id="nominalbayar" name="nominalbayar" placeholder="silahkan masukkan nominal..." required>
                @error('nominalbayar')
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

<script>
    const namabarang = document.querySelector('#barang');
    const hargajual = document.querySelector('#hargajual');

    namabarang.addEventListener('change', function() {
        fetch('/penjualan/create/checkHargaModal?namabarang=' + namabarang.value)
        .then(response => response.json())
        .then(data => hargajual.value = data.hargajual)
    });
</script>

@endsection