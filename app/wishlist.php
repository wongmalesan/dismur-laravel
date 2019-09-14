<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    protected $table =  "wishlists";
    protected $fillable = ['id_wishlist', 'id_member', 'id_produk','tanggal_wish'];
    protected $primaryKey = 'id_wishlist';
    public $incrementing = false;

    public function get_all()
    {
        return wishlist::all();
    }

    public function get_by_filter()
    {   
        $idmember = '';
        return wishlist::where('id_member', $idmember)->get();
    }

    public function searchs($ids)
    {
        return wishlist::find($ids);
    }

    public function stores($request)
    {
        $id = $this->generateId();
        $this->id_wishlist_new = $id;
        wishlist::create([
            'id_wishlist' => $id,
            'id_member' => $request->id_member,
            'id_produk' => $request->id_produk,
            'tanggal_wish' => now(),
        ]);
    }

    public function deletes($id)
    {
        $res = wishlist::find($id);
        $res->delete();
    }

    // public function updates($id, $request)
    // {
    //     $res = wishlist::find($id);
    //     $res->id_produk = $request->id_produk;
    //     $res->tanggal_wish = now();
    //     $res->save();
    // }

    public function generateId(){
        $last_id = wishlist::all()->last();
        $lastNumber = 0;
        if($last_id != null){
            $lastNumber = substr($last_id->id_wishlist, '1');
        }
        $new_id = 'W'.($lastNumber + 1 );
        return $new_id;
    }
}
