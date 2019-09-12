<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    //
    protected $table =  "produks";
    protected $fillable = ['id_produk','tanggal_input','diskon'];
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

    public function searchs($ids)
    {
        return produk::find($ids);;
    }

    public function stores($request)
    {
        produk::create([
            'id_produk' => '00', // generateProduk
            'tanggal_input' => now()->timestamp,
            'diskon' => $request->diskon,
            'id_user' => '00', // id login user
            'id_nama_produk' => '00', // generate dari tabel nama produk
            'id_kategori' => $request->id_kategori
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
        $p->diskon = $request->diskon;
        $p->tanggal_input = now()->timestamp;
        $p->save();
    }
}
