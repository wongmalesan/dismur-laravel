<!-- Menghubungkan dengan view template master -->
@extends('dashboard-layout')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Tambah Merchant')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <form method="post" action="/admin/merchant/tambahMerchant/simpan">

                {{ csrf_field() }}

                <!-- <div class="form-group">
                    <label>id_kategori</label>
                    <input type="text" name="id_kategori" class="form-control" placeholder="id Kategori ..">

                    @if($errors->has('id_kategori'))
                    <div class="text-danger">
                        {{ $errors->first('id_kategori')}}
                    </div>
                    @endif

                </div> -->

                <div class="form-group">
                    <label>Nama Merchant</label>
                    <input type="text" name="nama_merchant" class="form-control" placeholder="Nama Merchant ..">

                    @if($errors->has('nama_merchant'))
                    <div class="text-danger">
                        {{ $errors->first('nama_merchant')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Alamat Merchant</label>
                    <textarea name="alamat_merchant" class="form-control" placeholder="Alamat Merchant .."></textarea>

                    @if($errors->has('alamat_merchant'))
                    <div class="text-danger">
                        {{ $errors->first('alamat_merchant')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Map Location</label>
                    <input type="text" name="map_location" class="form-control" placeholder="URL Map Location ..">

                    @if($errors->has('map_location'))
                    <div class="text-danger">
                        {{ $errors->first('map_location')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Logo</label>
                    <input type="text" name="logo_merchant" class="form-control" placeholder="Choose Image ..">

                    @if($errors->has('logo_merchant'))
                    <div class="text-danger">
                        {{ $errors->first('logo_merchant')}}
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