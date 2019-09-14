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
            <a href="/kategori" class="btn btn-primary">Kembali</a>
            <br />
            <br />


            <form method="post" action="/kategori/update/{{ $kategori->id_kategori }}">

                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <!-- <div class="form-group">
                    <label>id_kategori</label>
                    <input type="text" name="id_kategori" class="form-control" value="{{$kategori->id_kategori}}" readonly>

                    @if($errors->has('id_kategori'))
                    <div class="text-danger">
                        {{ $errors->first('id_kategori')}}
                    </div>
                    @endif

                </div> -->

                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input name="nama_kategori" class="form-control" value="{{$kategori->nama_kategori}}">

                    @if($errors->has('nama_kategori'))
                    <div class="text-danger">
                        {{ $errors->first('nama_kategori')}}
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