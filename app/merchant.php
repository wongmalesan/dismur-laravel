<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class merchant extends Model
{
    protected $table =  "merchants";
    protected $fillable = ['nama_merchant', 'alamat_merchant'];
    protected $primaryKey = 'id_merchant';
    public $incrementing = false;

    public function get_all()
    {
        return merchant::all();
    }

    public function get_merchant_by_id($id)
    {
        return merchant::where('id_merchant', $id)->get();
    }

    public function get_by_filter()
    { 
        return merchant::where('id_kategori', 'P0')->get();
    }

    public function searchs($ids)
    {
        return merchant::find($ids);;
    }

    public function stores($request)
    {
        merchant::create([
            'id_logo_merchant' => $request->id_kategori,
            'nama_merchant' => $request->nama_merchant,
            'alamat_merchant' => $request->alamat_merchant,
            'map_location' => $request->map_location,
        ]);
    }

    public function deletes($id)
    {
        $merchant = merchant::find($id);
        $merchant->delete();
    }

    public function updates($id, $request)
    {
        $merchant = merchant::find($id);
        $merchant->nama_merchant = $request->nama_merchant;
        $merchant->save();
    }
}

