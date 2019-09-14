<!-- Menghubungkan dengan view template master -->
@extends('dashboard-layout')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Daftar Merchant')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <a href="/admin/merchant/tambahMerchant" class="btn btn-primary">Input Merchant Baru</a>
            <br />
            <br />
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID Merchant</th>
                        <th>Nama Merchant</th>
                        <th>Alamat Merchant</th>
                        <th>Map Location</th>
                        <th>Logo</th>
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
                        <td>{{ $Mdata->logo }}</td>
                        <td>
                            <a href="/admin/merchant/editMerchant/{{ $Mdata->id_merchant }}" class="btn btn-warning" title="Edit"><i class="fas fa-edit"></i></a>
                            <a href="/admin/merchant/hapusMerchant/{{ $Mdata->id_merchant }}" class="btn btn-danger" title="Delete"><i class="fas fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- ============================================= -->
</div>

@endsection