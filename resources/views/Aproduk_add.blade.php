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
            <form method="post" action="/admin/produk/tambahProduk/simpan">
            <!-- <form method="post" action="/testpost"> -->
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
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk ..">

                    @if($errors->has('nama_produk'))
                    <div class="text-danger">
                        {{ $errors->first('nama_produk')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Event Begin</label>
                    <!-- <input class="form-control" name="event_begin" type="datetime-local"> -->
                    <input class="form-control" name="event_begin" type="text">

                    @if($errors->has('event_begin'))
                    <div class="text-danger">
                        {{ $errors->first('event_begin')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Event End</label>
                    <!-- <input class="form-control" name="event_end" type="datetime-local"> -->
                    <input class="form-control" name="event_end" type="text">

                    @if($errors->has('event_end'))
                    <div class="text-danger">
                        {{ $errors->first('event_end')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Diskon</label>
                    <input type="text" name="diskon" class="form-control" placeholder="Add Diskon">

                    @if($errors->has('diskon'))
                    <div class="text-danger">
                        {{ $errors->first('diskon')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Kategori Produk</label>
                    <select class="form-control" name="kategori_produk">
                        <option value="audi" selected disabled>Select Kategori</option>
                        @foreach($k as $krow)
                        <option id="{{$krow->id_kategori}}" value="{{$krow->id_kategori}}">{{$krow->nama_kategori}}</option>
                        @endforeach
                    </select>

                    @if($errors->has('kategori_produk'))
                    <div class="text-danger">
                        {{ $errors->first('kategori_produk')}}
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

<script type="text/javascript">
    $('.date').datepicker({

        format: 'mm-dd-yyyy'

    });
</script>

@endsection