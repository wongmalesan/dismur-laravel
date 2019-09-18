
<!-- Menghubungkan dengan view template master -->
@extends('member-page.master_member')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Daftar Wishlist')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container">
    <!-- ============================================= -->
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Tanggal Wishlist</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($param as $data)
                    <tr>
                        <td>{{ $data->nama_produk }}</td>
                        <td>{{ $data->tanggal_wish }}</td>
                        <td>
                            <a href="/member/wishlist/hapus/{{ $data->id_wishlist }}" class="btn btn-danger" title="Delete"><i class="fas fa-times"></i></a>
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