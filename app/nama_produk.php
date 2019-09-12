<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nama_produk extends Model
{
    protected $table =  "nama_produks";
    protected $fillable = ['nama_produk'];
    protected $primaryKey = 'id_nama_produk';
    public $incrementing = false;

    public function get_all()
    {
        return nama_produk::all();
    }

    public function get_by_filter()
    { 
        return nama_produk::where('id_nama_produk', 'P0')->get();
    }

    public function searchs($ids)
    {
        return nama_produk::find($ids);;
    }

    public function stores($request)
    {
        nama_produk::create([
            'nama_produk' => $request->nama_produk,
        ]);
    }

    public function deletes($id)
    {
        $np = nama_produk::find($id);
        $np->delete();
    }

    public function updates($id, $request)
    {
        $np = nama_produk::find($id);
        $np->nama_produk = $request->nama_produk;
        $np->save();
    }
}
