<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_produk extends Model
{
    //
    protected $table =  "kategori_produks";
    protected $fillable = ['id_kategori', 'nama_kategori'];
    protected $primaryKey = 'id_kategori';
    public $incrementing = false;

    public function get_kategori()
    {
        return kategori_produk::all();
    }

    public function get_kategori_filter()
    { 
        return kategori_produk::where('id_kategori', 'P0')->get();
    }

    public function search_kategori($ids)
    {
        return kategori_produk::find($ids);;
    }

    public function store_kategori($request)
    {
        kategori_produk::create([
            'id_kategori' => $request->id_kategori,
            'nama_kategori' => $request->nama_kategori,
        ]);
    }

    public function delete_kategori($id)
    {
        $kategori = kategori_produk::find($id);
        $kategori->delete();
    }

    public function update_kategori($id, $request)
    {
        $kategori = kategori_produk::find($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
    }
}
