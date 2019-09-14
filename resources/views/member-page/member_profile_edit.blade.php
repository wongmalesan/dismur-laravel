<!-- Menghubungkan dengan view template master -->
@extends('member-page.master_member')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Edit Merchant')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <form method="post" action="/member/profile/edit/update/{{ $member->id_member }}">

                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label>Nama Member</label>
                    <input type="text" name="nama_member" class="form-control" value="{{ $member->nama_member }}">

                    @if($errors->has('nama_member'))
                    <div class="text-danger">
                        {{ $errors->first('nama_member')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Email Member</label>
                    <input name="email_member" class="form-control" type="email" value="{{ $member->email_member }}">

                    @if($errors->has('email_member'))
                    <div class="text-danger">
                        {{ $errors->first('email_member')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Foto Member</label>
                    <input type="text" name="foto_member" class="form-control" value="{{ $member->foto_member }}">

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