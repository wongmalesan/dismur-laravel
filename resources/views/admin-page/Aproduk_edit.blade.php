<!-- Menghubungkan dengan view template master -->
@extends('dashboard-layout')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Edit Produk')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="/admin/produk/editProduk/update/{{ $p->id_produk }}">

                {{ csrf_field() }}
                <!-- {{ method_field('PUT') }} -->

                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" value="{{ $p->nama_produk }}">

                    @if($errors->has('nama_produk'))
                    <div class="text-danger">
                        {{ $errors->first('nama_produk')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Event Begin</label>
                    <!-- <input class="form-control" name="event_begin" type="datetime-local"> -->
                    <input class="form-control" name="event_begin" type="text" value="{{ $p->event_begin }}">

                    @if($errors->has('event_begin'))
                    <div class="text-danger">
                        {{ $errors->first('event_begin')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Event End</label>
                    <!-- <input class="form-control" name="event_end" type="datetime-local"> -->
                    <input class="form-control" name="event_end" type="text" value="{{ $p->event_end }}">

                    @if($errors->has('event_end'))
                    <div class="text-danger">
                        {{ $errors->first('event_end')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" value="{{ $p->harga }}">

                    @if($errors->has('harga'))
                    <div class="text-danger">
                        {{ $errors->first('harga')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Diskon(%)</label>
                    <input type="number" name="diskon" class="form-control" value="{{ $p->diskon }}">

                    @if($errors->has('diskon'))
                    <div class="text-danger">
                        {{ $errors->first('diskon')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Merchant</label>
                    <select class="form-control" name="id_merchant">
                        <option selected disabled>Select Merchant</option>
                        @foreach($merchant as $mrow)
                        <option id="{{$mrow->id_merchant}}" value="{{$mrow->id_merchant}}">{{$mrow->nama_merchant}}</option>
                        @endforeach
                    </select>

                    @if($errors->has('kategori_produk'))
                    <div class="text-danger">
                        {{ $errors->first('kategori_produk')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Kategori Produk</label>
                    <select class="form-control" name="kategori_produk">
                        @foreach($kAll as $krow)
                        @if($krow->id_kategori == $k->id_kategori)
                        <option id="{{$krow->id_kategori}}" value="{{$krow->id_kategori}}" selected>{{$krow->nama_kategori}}</option>
                        @else
                        <option id="{{$krow->id_kategori}}" value="{{$krow->id_kategori}}">{{$krow->nama_kategori}}</option>
                        @endif
                        @endforeach
                    </select>

                    @if($errors->has('kategori_produk'))
                    <div class="text-danger">
                        {{ $errors->first('kategori_produk')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Gambar Produk</label>
                    <br>
                    <input type="file" name="foto_produk" class="mb-2">
                    <br>
                    <label>Gambar Produk Saat ini</label><br>
                    <img width="150px" src="{{ url('/main-asset-dismur/img/produk/'.$p->foto_produk) }}">

                    @if($errors->has('foto_produk'))
                    <div class="text-danger">
                        {{ $errors->first('foto_produk')}}
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