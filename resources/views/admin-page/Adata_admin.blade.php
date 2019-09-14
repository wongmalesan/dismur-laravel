<!-- Menghubungkan dengan view template master -->
@extends('dashboard-layout')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Dashboard Data Admin')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container">
    <div class="card">
        <div class="card-body">
            <a href="/admin/dataAdmin/tambah" class="btn btn-primary">Tambah Admin</a>
            <br />
            <br />
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID Admin</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ad as $data)
                    <tr>
                        <td>{{ $data->id_admin }}</td>
                        <td>{{ $data->nama_admin }}</td>
                        <td>{{ $data->email_admin }}</td>
                        <td>{{ $data->alamat_admin }}</td>
                        <td>{{ $data->telepon_admin }}</td>
                        <td>
                            <!-- <a href="/admin/dataAdmin/tambah/{{ $data->id_admin }}" class="btn btn-success" title="Hooray!"><i class="fas fa-plus"></i></a> -->
                            <a href="/admin/dataAdmin/edit/{{ $data->id_admin }}" class="btn btn-warning" title="Edit"><i class="fas fa-edit"></i></a>
                            <a href="/admin/dataAdmin/hapus/{{ $data->id_admin }}" class="btn btn-danger" title="Delete"><i class="fas fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection