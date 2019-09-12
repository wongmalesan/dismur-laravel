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
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID Merchant</th>
                        <th>Nama Merchant</th>
                        <th>Alamat Merchant</th>
                        <th>Map Location</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($m as $Mdata)
                    <tr>
                        <td>{{ $Mdata->id_merchant }}</td>
                        <td>{{ $Mdata->nama_merchant }}</td>
                        <td>{{ $Mdata->alamat_merchant }}</td>
                        <td>{{ $Mdata->map_location }}</td>
                        <td>
                            <a href="/merchant/edit/{{ $Mdata->id_merchant }}" class="btn btn-warning">Edit</a>
                            <a href="/merchant/hapus/{{ $Mdata->id_merchant }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- ============================================= -->

    <div class="card mt-5">
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID Kategori</th>
                        <th>Nama Kategori Produk</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kp as $KPdata)
                    <tr>
                        <td>{{ $KPdata->id_kategori }}</td>
                        <td>{{ $KPdata->nama_kategori }}</td>
                        <td>
                            <a href="/kategori/edit/{{ $KPdata->id_kategori }}" class="btn btn-warning">Edit</a>
                            <a href="/kategori/hapus/{{ $KPdata->id_kategori }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection