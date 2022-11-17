@extends('layouts.main')

@section('tables')

    <div class="card">
        <div class="card border-light m-2">
            <h3 class="p-2">Tabel Data Barang</h3>

            <table id="example" class="table table-striped table-hover p-1" style="width:100%">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Stock</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $barangs as $barang )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $barang->namabarang }}</td>
                        <td>{{ $barang->jenisbarang }}</td>
                        <td>{{ $barang->hargamodal }}</td>
                        <td>{{ $barang->hargajual }}</td>
                        <td>{{ $barang->stock }}</td>
                        <td>
                            <div class="row">
                                <a href="{{ route('databarang.edit', $barang->id) }}">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button>
                                </a>
                                <form action="{{ route('databarang.destroy', $barang->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a onclick="return confirm('Apakah anda yakin? ');" href="">
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </a>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection