<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $table =  "members";
    protected $fillable = ['id_member', 'nama_member', 'email_member','tanggal_daftar','foto_member', 'id_referal'];
    protected $primaryKey = 'id_member';
    public $incrementing = false;
    private $id_member_new;

    public function get_all()
    {
        return member::all();
    }

    // public function get_kategori_filter()
    // { 
    //     return member::where('id_member', 'P0')->get();
    // }

    public function searchs($ids)
    {
        return member::find($ids);
    }

    public function stores($request)
    {
        $id = $this->generateId();
        $idref = $this->generateReferalId();
        $this->id_member_new = $id;
        member::create([
            'id_member' => $id,
            'nama_member' => $request->nama_member,
            'email_member' => $request->email_member,
            'tanggal_daftar' => now(),
            'foto_member' => $request->foto_member,
            'id_referal' => $idref,
        ]);
    }

    public function deletes($id)
    {
        $res = member::find($id);
        $res->delete();
    }

    public function updates($id, $request)
    {
        $res = member::find($id);
        $res->nama_member = $request->nama_member;
        $res->email_member = $request->email_member;
        $res->tanggal_daftar = $res->tanggal_daftar;
        $res->foto_member = $request->foto_member;
        $res->id_referal = $res->id_referal;
        $res->save();
    }

    public function generateId(){
        $last_id = member::all()->last();
        $lastNumber = 0;
        if($last_id != null){
            $lastNumber = substr($last_id->id_member, '2');
        }
        $new_id = 'MB'.($lastNumber + 1 );
        return $new_id;
    }

    public function generateReferalId(){
        $dateTime = now()->timestamp;
        $randomNumber = rand(1,100);
        $idreferal = $randomNumber.$this->id_member_new.$dateTime;
        return $idreferal;
    }
}
