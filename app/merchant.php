<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class merchant extends Model
{
    protected $table =  "merchants";
    protected $fillable = ['id_merchant', 'nama_merchant', 'alamat_merchant', 'map_location', 'logo'];
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
        $id_merchant = $this->generateIdMerchant();
        merchant::create([
            'id_merchant' => $id_merchant,
            'nama_merchant' => $request->nama_merchant,
            'alamat_merchant' => $request->alamat_merchant,
            'map_location' => $request->map_location,
            'logo' => $request->logo_merchant,
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
        $merchant->alamat_merchant = $request->alamat_merchant;
        $merchant->map_location = $request->map_location;
        $merchant->logo = $request->logo;
        $merchant->save();
    }

    public function generateIdMerchant(){
        $last_id_merchant = merchant::all()->last();
        $split = substr($last_id_merchant->id_merchant, '1');
        $new_id = 'M'.($split+1);
        return $new_id;
    }
}

