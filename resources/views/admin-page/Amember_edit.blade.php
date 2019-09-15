<!-- Menghubungkan dengan view template master -->
@extends('dashboard-layout')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Edit Admin')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="/admin/member/edit/update/{{ $senddata->id_member }}">

                {{ csrf_field() }}

                <div class="form-group">
                    <label>Nama Member</label>
                    <input type="text" name="nama_member" class="form-control" value="{{ $senddata->nama_member }}">

                    @if($errors->has('nama_member'))
                    <div class="text-danger">
                        {{ $errors->first('nama_member')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Email Member</label>
                    <input class="form-control" name="email_member" type="email" value="{{ $senddata->email_member }}">

                    @if($errors->has('email_member'))
                    <div class="text-danger">
                        {{ $errors->first('email_member')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                <label>Upload Foto</label>
                    <br>
                    <input type="file" name="foto_member" class="mb-2">
                    <br>
                    <label>Logo Saat ini</label><br>
                    <img width="150px" src="{{ url('/main-asset-dismur/img/member/'.$senddata->foto_member) }}">

                    @if($errors->has('foto_member'))
                    <div class="text-danger">
                        {{ $errors->first('foto_member')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>

            </form>

        </div>
    </div>
</div>

@endsection