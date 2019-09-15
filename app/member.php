<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

class member extends Model
{
    protected $table =  "members";
    protected $fillable = ['id_member', 'nama_member', 'email_member','tanggal_daftar','foto_member', 'id_referal'];
    protected $primaryKey = 'id_member';
    public $incrementing = false;
    private $id_member_new;
    private $url_img = 'main-asset-dismur/img/member';

    public function get_all()
    {
        return member::all()->sortBy('created_at');
    }

    // public function get_kategori_filter()
    // { 
    //     return member::where('id_member', 'P0')->get();
    // }

    public function get_by_id($id)
    {
        return member::where('id_member', $id)->get();
    }

    public function searchs($ids)
    {
        return member::find($ids);
    }

    public function stores($request)
    {
        $id = $this->generateId();
        $idref = $this->generateReferalId();
        $nama_file = "";

        if ($request->hasFile('foto_member')) {
            $nama_file = $this->upload_image($request);
        } else {
            $nama_file = 'default.png';
        }

        $this->id_member_new = $id;
        member::create([
            'id_member' => $id,
            'nama_member' => $request->nama_member,
            'email_member' => $request->email_member,
            'tanggal_daftar' => now(),
            'foto_member' => $nama_file,
            'id_referal' => $idref,
        ]);
    }

    public function deletes($id)
    {
        $res = member::find($id);
        $this->delete_image($res->foto_member);
        $res->delete();
    }

    public function updates($id, $request)
    {
        $res = member::find($id);
        $nama_file = "";

        if ($request->hasFile('foto_member')) {
            $this->delete_image($res->foto_member);
            $nama_file = $this->upload_image($request);
        } else {
            $nama_file = $res->foto_member;
        }

        $res->nama_member = $request->nama_member;
        $res->email_member = $request->email_member;
        $res->tanggal_daftar = $res->tanggal_daftar;
        $res->foto_member = $nama_file;
        $res->id_referal = $res->id_referal;
        $res->save();
    }

    public function upload_image($request)
    {
        $file = $request->file('foto_member');
        $namaFile = time() . "_" . $file->getClientOriginalName();
        $file->move($this->url_img, $namaFile);
        return $namaFile;
    }

    public function delete_image($nama_file)
    {
        if($nama_file != 'default.png'){
            File::delete($this->url_img . '/' . $nama_file);
        }
    }

    public function delete_image_to_default($id, $nama_file)
    {
        File::delete($this->url_img . '/' . $nama_file);
        $res = member::find($id);
        $res->foto_member = 'default.png';
    }

    public function generateId(){
        $last_id = member::all()->sortBy('created_at')->last();
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
