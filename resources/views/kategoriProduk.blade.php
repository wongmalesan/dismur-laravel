<!-- Menghubungkan dengan view template master -->
@extends('dashboard-layout')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Dashboard Admin')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <a href="/kategori/tambah" class="btn btn-primary">Input Pegawai Baru</a>
            <br />
            <br />
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID Kategori</th>
                        <th>Nama Kategori Produk</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kategori as $data)
                    <tr>
                        <td>{{ $data->id_kategori }}</td>
                        <td>{{ $data->nama_kategori }}</td>
                        <td>
                            <a href="/kategori/edit/{{ $data->id_kategori }}" class="btn btn-warning">Edit</a>
                            <a href="/kategori/hapus/{{ $data->id_kategori }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection