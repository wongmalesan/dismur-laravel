<!-- Menghubungkan dengan view template master -->
@extends('member-page.master_member')

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
                <dt class="col-sm-3">Id Member</dt>
                <dd class="col-sm-7">{{ $member->id_member }}</dd>

                <dt class="col-sm-3">Nama Member</dt>
                <dd class="col-sm-7">{{ $member->nama_member }}</dd>

                <dt class="col-sm-3">Email Member</dt>
                <dd class="col-sm-7">{{ $member->email_member }}</dd>

                <dt class="col-sm-3">Foto Member</dt>
                <dd class="col-sm-7">{{ $member->foto_member }}</dd>

                <dt class="col-sm-3">id_referal</dt>
                <dd class="col-sm-7">{{ $member->id_referal }}</dd>
            </dl>
            <a href="/member/profile/edit/{{ $member->id_member }}" class="btn btn-warning" style="float:right;" title="Edit"><i class="fas fa-edit"></i></a>
        </div>
    </div>
</div>
@endsection