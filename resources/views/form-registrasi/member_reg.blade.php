<!-- Menghubungkan dengan view template master -->
@extends('form-registrasi.master_reg')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Registration')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <form method="post" action="/reg/member/simpan">
                {{ csrf_field() }}

                <div class="form-group">
                    <label>Nama Member</label>
                    <input type="text" name="nama_member" class="form-control" placeholder="Nama Admin ..">

                    @if($errors->has('nama_member'))
                    <div class="text-danger">
                        {{ $errors->first('nama_member')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Email Member</label>
                    <input class="form-control" name="email_member" type="email" placeholder="Email Admin">

                    @if($errors->has('email_member'))
                    <div class="text-danger">
                        {{ $errors->first('email_member')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" name="password_confirmation" type="password" placeholder="Enter Password ...">

                    @if($errors->has('password_confirmation'))
                    <div class="text-danger">
                        {{ $errors->first('password_confirmation')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Verifikasi Password</label>
                    <input class="form-control" name="password" type="password" placeholder="Verified Password ...">

                    @if($errors->has('password'))
                    <div class="text-danger">
                        {{ $errors->first('password')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Upload Foto</label>
                    <input class="form-control" name="foto_member">

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