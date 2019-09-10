<!-- Menghubungkan dengan view template master -->
@extends('dashboard-layout')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Dashboard Admin Merchant')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="profile-user-info">
    <div class="profile-info-row">
        <div class="profile-info-name"> Id Merchant </div>

        <div class="profile-info-value">
            <span>{{ $merchant->id_merchant }}</span>
        </div>
    </div>

    <div class="profile-info-row">
        <div class="profile-info-name"> Nama Merchant </div>

        <div class="profile-info-value">
            <span>{{ $merchant->nama_merchant }}</span>
        </div>
    </div>

    <div class="profile-info-row">
        <div class="profile-info-name"> Alamat Merchant </div>

        <div class="profile-info-value">
            <span>{{ $merchant->alamat_merchant }}</span>
        </div>
    </div>

    <div class="profile-info-row">
        <div class="profile-info-name"> Map Location </div>

        <div class="profile-info-value">
            <span>{{ $merchant->map_location }}</span>
        </div>
    </div>

    <div class="profile-info-row">
        <div class="profile-info-name"> Logo Merchant </div>

        <div class="profile-info-value">
            <span>{{ $merchant->logo_merchant }}</span>
        </div>
    </div>
</div>

@endsection