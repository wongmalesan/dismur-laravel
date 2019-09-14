<!-- Menghubungkan dengan view template master -->
@extends('merchant-page.master_merchant')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Daftar Produk')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="/merchant/produk/tambah" class="btn btn-primary">Input Produk Baru</a>
                <br />
                <br />
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID Produk</th>
                            <th>Nama Produk</th>
                            <th>Tanggal</th>
                            <th>Event Begin Date</th>
                            <th>Event End Date</th>
                            <th>Harga</th>
                            <th>Diskon(%)</th>
                            <th>Penambah</th>
                            <th>Kategori</th>
                            <th>Gambar Produk</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($senddata as $data)
                        <tr>
                            <td>{{ $data->id_produk }}</td>
                            <td>{{ $data->nama_produk }}</td>
                            <td>{{ $data->tanggal_input }}</td>
                            <td>{{ $data->event_begin }}</td>
                            <td>{{ $data->event_end }}</td>
                            <td>{{ $data->harga }}</td>
                            <td>{{ $data->diskon }}</td>
                            <td>{{ $data->id_merchant }}</td>
                            <td>{{ $data->id_kategori }}</td>
                            <td>{{ $data->foto_produk }}</td>
                            <td>
                                <a href="/merchant/produk/edit/{{ $data->id_produk }}" class="btn btn-warning" title="Edit"><i class="fas fa-edit"></i></a>
                                <a href="/merchant/produk/hapus/{{ $data->id_produk }}" class="btn btn-danger" title="Delete"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection