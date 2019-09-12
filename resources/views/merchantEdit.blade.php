<!-- Menghubungkan dengan view template master -->
@extends('dashboard-layout')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Dashboard Admin')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <form method="post" action="/merchant/update/{{ $merchant->id_merchant }}">

                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label>Nama Merchant</label>
                    <input type="text" name="nama_merchant" class="form-control" value="{{$merchant->nama_merchant}}">

                    @if($errors->has('nama_merchant'))
                    <div class="text-danger">
                        {{ $errors->first('nama_merchant')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Alamat Merchant</label>
                    <input type="text" name="alamat_merchant" class="form-control" value="{{$merchant->alamat_merchant}}">

                    @if($errors->has('alamat_merchant'))
                    <div class="text-danger">
                        {{ $errors->first('alamat_merchant')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Map Location</label>
                    <input type="text" name="map_location" class="form-control" value="{{$merchant->map_location}}">

                    @if($errors->has('map_location'))
                    <div class="text-danger">
                        {{ $errors->first('map_location')}}
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