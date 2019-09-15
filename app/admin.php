<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table =  "admins";
    protected $fillable = ['id_admin', 'nama_admin', 'email_admin','alamat_admin','telepon_admin'];
    protected $primaryKey = 'id_admin';
    public $incrementing = false;

    public function get_all()
    {
        return admin::all()->sortBy('created_at');
    }

    // public function get_kategori_filter()
    // { 
    //     return admin::where('id_admin', 'P0')->get();
    // }

    public function searchs($ids)
    {
        return admin::find($ids);
    }

    public function stores($request)
    {
        $id = $this->generateId();
        admin::create([
            'id_admin' => $id,
            'nama_admin' => $request->nama_admin,
            'email_admin' => $request->email_admin,
            'alamat_admin' => $request->alamat_admin,
            'telepon_admin' => $request->telepon_admin
        ]);
    }

    public function deletes($id)
    {
        $res = admin::find($id);
        $res->delete();
    }

    public function updates($id, $request)
    {
        $res = admin::find($id);
        $res->nama_admin = $request->nama_admin;
        $res->email_admin = $request->email_admin;
        $res->alamat_admin = $request->alamat_admin;
        $res->telepon_admin = $request->telepon_admin;
        $res->save();
    }

    public function generateId(){
        $last_id = admin::all()->last();
        $lastNumber = 0;
        if($last_id != null){
            $lastNumber = substr($last_id->id_admin, '2');
        }
        $new_id = 'AD'.($lastNumber + 1 );
        return $new_id;
    }
}
