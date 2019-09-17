<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

class merchant extends Model
{
    protected $table =  "merchants";
    protected $fillable = ['id_merchant', 'nama_merchant', 'alamat_merchant', 'map_location', 'logo'];
    protected $primaryKey = 'id_merchant';
    public $incrementing = false;
    private $url_img = 'main-asset-dismur/img/merchant';
    public $new_id_merchant;

    public function get_all()
    {
        return merchant::all()->sortBy('created_at');
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
        if ($request->hasFile('logo_merchant')) {
            $nama_file = $this->upload_image($request);
        } else {
            $nama_file = 'default.png';
        }
        merchant::create([
            'id_merchant' => $id_merchant,
            'nama_merchant' => $request->nama_merchant,
            'alamat_merchant' => $request->alamat_merchant,
            'map_location' => $request->map_location,
            'logo' => $nama_file,
        ]);
    }

    public function deletes($id)
    {
        $merchant = merchant::find($id);
        $this->delete_image($merchant->logo);
        $merchant->delete();
    }

    public function updates($id, $request)
    {
        $merchant = merchant::find($id);
        $nama_file = "";

        if ($request->hasFile('logo_merchant')) {
            $this->delete_image($merchant->logo);
            $nama_file = $this->upload_image($request);
        } else {
            $nama_file = $merchant->logo;
        }

        $merchant->nama_merchant = $request->nama_merchant;
        $merchant->alamat_merchant = $request->alamat_merchant;
        $merchant->map_location = $request->map_location;
        $merchant->logo = $nama_file;
        $merchant->save();
    }

    public function upload_image($request)
    {
        $file = $request->file('logo_merchant');
        $namaFile = time() . "_" . $file->getClientOriginalName();
        $file->move($this->url_img, $namaFile);
        return $namaFile;
    }

    public function delete_image($nama_file)
    {
        File::delete($this->url_img . '/' . $nama_file);
    }

    public function generateIdMerchant()
    {
        $last_id_merchant = merchant::all()->sortBy('created_at')->last();
        echo $last_id_merchant;
        $split = substr($last_id_merchant->id_merchant, '1');
        $new_id = 'M' . ($split + 1);
        $this->new_id_merchant = $new_id;
        return $new_id;
    }
}
