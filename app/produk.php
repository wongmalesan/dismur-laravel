<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

class produk extends Model
{
    //
    protected $table =  "produks";
    protected $fillable = ['id_produk', 'nama_produk', 'tanggal_input', 'event_begin', 'event_end', 'harga', 'diskon', 'id_merchant', 'id_kategori', 'foto_produk'];
    protected $primaryKey = 'id_produk';
    public $incrementing = false;
    private $url_img = 'main-asset-dismur/img/produk';

    public function get_all()
    {
        return produk::all()->sortBy('created_at');
    }

    public function get_by_filter()
    {
        return produk::where('id_produk', 'P0')->get();
    }

    public function get_produk_by_id_merchant($id)
    {
        return produk::where('id_merchant', $id)->get();
    }

    public function searchs($ids)
    {
        return produk::find($ids);;
    }

    public function stores($request)
    {
        $id = $this->generateIdProduk();
        $nama_file = $this->upload_image($request);
        produk::create([
            'id_produk' => $id, // generateProduk
            'nama_produk' => $request->nama_produk,
            'tanggal_input' => now(),
            'event_begin' => $request->event_begin,
            'event_end' => $request->event_end,
            'harga' => $request->harga,
            'diskon' => $request->diskon,
            'id_merchant' => '000', // id login user
            'id_kategori' => $request->kategori_produk,
            'foto_produk' => $nama_file
        ]);
    }

    public function ADstores($request)
    {
        $id = $this->generateIdProduk();
        produk::create([
            'id_produk' => $id, // generateProduk
            'nama_produk' => $request->nama_produk,
            'tanggal_input' => now(),
            'event_begin' => $request->event_begin,
            'event_end' => $request->event_end,
            'harga' => $request->harga,
            'diskon' => $request->diskon,
            'id_merchant' => $request->id_merchant,
            'id_kategori' => $request->kategori_produk,
            'foto_produk' => $request->foto_produk
        ]);
    }

    public function deletes($id)
    {
        $p = produk::find($id);
        $this->delete_image($p->foto_produk);
        $p->delete();
    }

    public function updates($id, $request)
    {
        $nama_file = "";
        $p = produk::find($id);

        if ($request->hasFile('foto_produk')) {
            $this->delete_image($p->foto_produk);
            $nama_file = $this->upload_image($request);
        } else {
            $nama_file = $p->foto_produk;
        }
        echo $nama_file;

        $p->nama_produk = $request->nama_produk;
        $p->tanggal_input = now();
        $p->event_begin = $request->event_begin;
        $p->event_end = $request->event_end;
        $p->harga = $request->harga;
        $p->diskon = $request->diskon;
        $p->id_merchant = 'iduser';
        $p->id_kategori = $request->kategori_produk;
        $p->foto_produk = $nama_file;
        //$p->save();
    }

    public function ADupdates($id, $request)
    {
        $p = produk::find($id);
        $nama_file = "";

        if ($request->hasFile('foto_produk')) {
            $this->delete_image($p->foto_produk);
            $nama_file = $this->upload_image($request);
        } else {
            $nama_file = $p->foto_produk;
        }

        $p->nama_produk = $request->nama_produk;
        $p->tanggal_input = now();
        $p->event_begin = $request->event_begin;
        $p->event_end = $request->event_end;
        $p->harga = $request->harga;
        $p->diskon = $request->diskon;
        $p->id_merchant = $request->id_merchant;
        $p->id_kategori = $request->kategori_produk;
        $p->foto_produk = $nama_file;
        $p->save();
        //return $request->id_kategori;
    }

    public function upload_image($request)
    {
        $file = $request->file('foto_produk');
        $namaFile = time() . "_" . $file->getClientOriginalName();
        $file->move($this->url_img, $namaFile);
        return $namaFile;
    }

    public function delete_image($nama_file)
    {
        File::delete($this->url_img . '/' . $nama_file);
    }

    public function generateIdProduk()
    {
        $last_id = produk::all()->sortBy('created_at')->last();
        $lastNumber = 0;
        if ($last_id != null) {
            $lastNumber = substr($last_id->id_produk, '1');
        }
        $new_id = 'P' . ($lastNumber + 1);
        return $new_id;
    }
}
