@extends('layouts.main')

@section('tables')
    
<div class="card">
    <div class="card border-light m-2">
        <h3 class="p-2">Tabel Riwayat Barang</h3>

        <table id="example" class="table table-striped table-hover p-1" style="width:100%">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Barang</th>
                    <th>Stock Masuk</th>
                    <th>Tanggal Masuk</th>
                    @can('admin')
                    <th>Aksi</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach( $stocks as $stock )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $stock->barang->namabarang }}</td>
                    <td>{{ $stock->jumlah }}</td>
                    <td>{{ $stock->created_at }}</td>
                    @can('admin')
                    <td>
                        <form action="{{ route('stock.destroy', $stock->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a onclick="return confirm('Apakah anda yakin? ');" href="">
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </a>
                        </form>
                    </td>
                    @endcan
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection