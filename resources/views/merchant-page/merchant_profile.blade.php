<!-- Menghubungkan dengan view template master -->
@extends('merchant-page.master_merchant')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Dashboard Admin Merchant')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<div class="container">
    <div class="card">
        <div class="card-body">
        <img width="150px" src="{{ url('/image/default-avatar.png') }}" class="mb-5">
            <dl class="row">
                <dt class="col-sm-3">Id Merchant</dt>
                <dd class="col-sm-7">{{ $merchant->id_merchant }}</dd>

                <dt class="col-sm-3">Nama Merchant</dt>
                <dd class="col-sm-7">{{ $merchant->nama_merchant }}</dd>

                <dt class="col-sm-3">Alamat Merchant</dt>
                <dd class="col-sm-7">{{ $merchant->alamat_merchant }}</dd>

                <dt class="col-sm-3 text-truncate">Map Location</dt>
                <dd class="col-sm-7">{{ $merchant->map_location }}</dd>

                <dt class="col-sm-3">Logo Merchant</dt>
                <dd class="col-sm-7">{{ $merchant->logo }}</dd>
            </dl>
            <a href="/merchant/profile/edit/{{ $merchant->id_merchant }}" class="btn btn-warning" style="float:right;" title="Edit"><i class="fas fa-edit"></i></a>
        </div>
    </div>
</div>
@endsection