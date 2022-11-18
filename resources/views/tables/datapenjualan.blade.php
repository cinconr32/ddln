@extends('layouts.main')

@section('tables')

<div class="card">
    <div class="card border-light m-2">
        <h3 class="p-2">Tabel Data Penjualan</h3>

        <table id="example" class="table table-striped table-hover p-1" style="width:100%">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Tanggal Penjualan</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Penjualan</th>
                    <th>Pendapatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $sum = 0; ?>
                @foreach( $datapenjualan as $penjualan )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $penjualan->created_at }}</td>
                    <td>{{ $penjualan->barang->namabarang }}</td>
                    <td>{{ $penjualan->jumlah }}</td>
                    <td>{{ 'Rp'.number_format( $penjualan->barang->hargamodal ) }}</td>
                    <td>{{ 'Rp'.number_format( $penjualan->hargajual ) }}</td>
                    <td>{{ 'Rp'.number_format( $penjualan->nominalbayar ) }}</td>
                    <td>{{ 'Rp'.number_format( $pendapatan = $penjualan->hargajual * $penjualan->jumlah - $penjualan->barang->hargamodal * $penjualan->jumlah ) }}</td>
                    <td>
                        <form action="{{ route('penjualan.destroy', $penjualan->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a onclick="return confirm('Apakah anda yakin? ');" href="">
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </a>
                        </form>
                    </td>
                </tr>
                <?php $sum = $sum + $pendapatan; ?>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="2">Total Pendapatan</th>
                    <th>{{ 'Rp'.number_format( $sum ) }}</th>
                </tr>
            </tfoot>
        </table>

    </div>
</div>

@endsection