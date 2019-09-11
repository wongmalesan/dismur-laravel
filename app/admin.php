<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table =  "admins";
    protected $fillable = ['id_admin', 'nama_admin', 'email_admin'];
    protected $primaryKey = 'id_admin';
    public $incrementing = false;

    public function get_admin()
    {
        return admin::all();
    }

    // public function get_kategori_filter()
    // { 
    //     return admin::where('id_admin', 'P0')->get();
    // }

    public function search_admin($ids)
    {
        return admin::find($ids);;
    }

    public function store_admin($request)
    {
        admin::create([
            'id_admin' => $request->id_admin,
            'nama_admin' => $request->nama_admin,
            'email_admin' => $request->email_admin,
        ]);
    }

    public function delete_admin($id)
    {
        $kategori = admin::find($id);
        $kategori->delete();
    }

    public function update_admin($id, $request)
    {
        $kategori = admin::find($id);
        $kategori->nama_admin = $request->nama_admin;
        $kategori->email_admin = $request->email_admin;
        $kategori->save();
    }
}
