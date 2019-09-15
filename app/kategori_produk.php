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
        return kategori_produk::all()->sortBy('created_at');
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
        $id = $this->generateId();
        kategori_produk::create([
            'id_kategori' => $id,
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

    public function generateId(){
        $last_id = kategori_produk::all()->sortBy('created_at')->last();
        $lastNumber = 0;
        if($last_id != null){
            $lastNumber = substr($last_id->id_kategori, '2');
        }
        $new_id = 'KP'.($lastNumber + 1 );
        return $new_id;
    }
}
