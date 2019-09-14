<!-- Menghubungkan dengan view template master -->
@extends('dashboard-layout')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Data Member')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container">
    <div class="card">
        <div class="card-body">
            <a href="/admin/member/tambah" class="btn btn-primary">Tambah Member</a>
            <br />
            <br />
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID Member</th>
                        <th>Nama Member</th>
                        <th>Email Member</th>
                        <th>Tanggal Daftar</th>
                        <th>Foto</th>
                        <th>ID Referal Member</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($senddata as $data)
                    <tr>
                        <td>{{ $data->id_member }}</td>
                        <td>{{ $data->nama_member }}</td>
                        <td>{{ $data->email_member }}</td>
                        <td>{{ $data->tanggal_daftar }}</td>
                        <td>{{ $data->foto_member }}</td>
                        <td>{{ $data->id_referal }}</td>
                        <td>
                            <a href="/admin/member/edit/{{ $data->id_member }}" class="btn btn-warning" title="Edit"><i class="fas fa-edit"></i></a>
                            <a href="/admin/member/hapus/{{ $data->id_member }}" class="btn btn-danger" title="Delete"><i class="fas fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection