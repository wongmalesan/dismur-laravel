<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    //
    protected $table =  "produks";
    protected $fillable = ['id_produk', 'nama_produk', 'tanggal_input', 'event_begin', 'event_end', 'diskon', 'id_user', 'id_kategori'];
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
        $id = $this->generateIdProduk();
        produk::create([
            'id_produk' => $id, // generateProduk
            'nama_produk' => $request->nama_produk,
            'tanggal_input' => now(),
            'even_begin' => $request->event_begin,
            'even_end' => $request->event_end,
            'diskon' => $request->diskon,
            'id_user' => '000', // id login user
            'id_kategori' => $request->kategori_produk
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
