<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    //
    protected $table =  "produks";
    protected $fillable = ['id_produk', 'nama_produk', 'tanggal_input', 'event_begin', 'event_end', 'harga', 'diskon', 'id_merchant', 'id_kategori', 'foto_produk'];
    protected $primaryKey = 'id_produk';
    public $incrementing = false;

    public function get_all()
    {
        return produk::all();
    }

    public function get_by_filter()
    { 
        return produk::where('id_produk', 'P0')->get();
    }

    public function get_produk_by_id_merchant($id)
    {
        return produk::where('id_merchant', $id)->get();
    }

    public function searchs($ids)
    {
        return produk::find($ids);;
    }

    public function stores($request)
    {
        $id = $this->generateIdProduk();
        produk::create([
            'id_produk' => $id, // generateProduk
            'nama_produk' => $request->nama_produk,
            'tanggal_input' => now(),
            'event_begin' => $request->event_begin,
            'event_end' => $request->event_end,
            'harga' => $request->harga,
            'diskon' => $request->diskon,
            'id_merchant' => '000', // id login user
            'id_kategori' => $request->kategori_produk,
            'foto_produk' => $request->foto_produk
        ]);
    }

    public function Mstores($idx, $request)
    {
        $id = $this->generateIdProduk();
        produk::create([
            'id_produk' => $id, // generateProduk
            'nama_produk' => $request->nama_produk,
            'tanggal_input' => now(),
            'event_begin' => $request->event_begin,
            'event_end' => $request->event_end,
            'harga' => $request->harga,
            'diskon' => $request->diskon,
            'id_merchant' => $idx, // id login user
            'id_kategori' => $request->kategori_produk,
            'foto_produk' => $request->foto_produk
        ]);
    }

    public function deletes($id)
    {
        $p = produk::find($id);
        $p->delete();
    }

    public function updates($id, $request)
    {
        $p = produk::find($id);
        $p->nama_produk = $request->nama_produk;
        $p->tanggal_input = now();
        $p->event_begin = $request->event_begin;
        $p->event_end = $request->event_end;
        $p->harga = $request->harga;
        $p->diskon = $request->diskon;
        $p->id_merchant = 'iduser';
        $p->id_kategori = $request->kategori_produk;
        $p->foto_produk = $request->foto_produk;
        $p->save();
        //return $request->id_kategori;
    }

    public function Mupdates($id, $request, $idm)
    {
        $p = produk::find($id);
        $p->nama_produk = $request->nama_produk;
        $p->tanggal_input = now();
        $p->event_begin = $request->event_begin;
        $p->event_end = $request->event_end;
        $p->harga = $request->harga;
        $p->diskon = $request->diskon;
        $p->id_merchant = $idm;
        $p->id_kategori = $request->kategori_produk;
        $p->foto_produk = $request->foto_produk;
        $p->save();
        //return $request->id_kategori;
    }

    public function generateIdProduk(){
        $last_id = produk::all()->last();
        $lastNumber = 0;
        if($last_id != null){
            $lastNumber = substr($last_id->id_produk, '1');
        }
        $new_id = 'P'.($lastNumber + 1 );
        return $new_id;
    }
}
