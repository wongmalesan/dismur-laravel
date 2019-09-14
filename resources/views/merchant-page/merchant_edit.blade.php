<!-- Menghubungkan dengan view template master -->
@extends('dashboard-layout')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Edit Merchant')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <form method="post" action="/merchant/profile/edit/update/{{ $merchant->id_merchant }}">

                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label>Nama Merchant</label>
                    <input type="text" name="nama_merchant" class="form-control" value="{{ $merchant->nama_merchant }}">

                    @if($errors->has('nama_merchant'))
                    <div class="text-danger">
                        {{ $errors->first('nama_kategori')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Alamat Merchant</label>
                    <textarea name="alamat_merchant" class="form-control">
                    {{ $merchant->alamat_merchant }}
                    </textarea>

                    @if($errors->has('alamat_merchant'))
                    <div class="text-danger">
                        {{ $errors->first('alamat_kategori')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Map Location</label>
                    <input type="text" name="map_location" class="form-control" value="{{ $merchant->map_location }}">

                    @if($errors->has('map_location'))
                    <div class="text-danger">
                        {{ $errors->first('map_location')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Logo</label>
                    <input type="text" name="logo" class="form-control" value="{{ $merchant->logo }}">

                    @if($errors->has('logo'))
                    <div class="text-danger">
                        {{ $errors->first('logo')}}
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