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
            <form method="post" action="/admin/dataAdmin/edit/update/{{ $ad->id_admin }}">

                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label>Nama Admin</label>
                    <input type="text" name="nama_admin" class="form-control" value="{{ $ad->nama_admin }}">

                    @if($errors->has('nama_admin'))
                    <div class="text-danger">
                        {{ $errors->first('nama_admin')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Email Admin</label>
                    <input class="form-control" name="email_admin" type="email" value="{{ $ad->email_admin }}">

                    @if($errors->has('email_admin'))
                    <div class="text-danger">
                        {{ $errors->first('email_admin')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Alamat Admin</label>
                    <textarea class="form-control" name="alamat_admin" value="{{ $ad->alamat_admin }}"></textarea>

                    @if($errors->has('alamat_admin'))
                    <div class="text-danger">
                        {{ $errors->first('alamat_admin')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon_admin" class="form-control" value="{{ $ad->telepon_admin }}">

                    @if($errors->has('telepon_admin'))
                    <div class="text-danger">
                        {{ $errors->first('telepon_admin')}}
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