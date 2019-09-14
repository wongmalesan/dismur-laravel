<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\merchant;
use App\produk;
use App\kategori_produk;

class merchantController extends Controller
{
    //
    private $merchant;
    private $produk;
    private $kategori;

    public function __construct()
    {
        $this->merchant = new merchant();
        $this->produk = new produk();
        $this->kategori = new kategori_produk();
    }

    public function index()
    {
        // $id = 'M1'; //get data from session id
        // $res = $this->merchant->get_merchant_by_id($id);
        //return view('merchant-page.merchant', ['merchant' => $res[0]]);
        // return view('merchant-page.merchant')
        //     ->with('merchant', $res[0]);
        return view('merchant-page.merchant')
                ->with('Teknik', 200)
                ->with('Fisip', 250)
                ->with('Ekonomi', 100)
                ->with('Pertanian', 400);
    }

    #region merchant
    public function get_profile()
    {
        $id = 'M1'; //get data from session id
        $res = $this->merchant->get_merchant_by_id($id);
        return view('merchant-page.merchant_profile', ['merchant' => $res[0]]);
    }

    public function edit_profile($id)
    {
        $data = $this->merchant->searchs($id);
        return view('merchant-page.merchant_edit', ['merchant' => $data]);
    }

    public function save_update_profile($id, Request $request)
    {
        $this->validate($request, [
            'nama_merchant' => 'required',
            'alamat_merchant' => 'required'
        ]);

        $this->merchant->updates($id, $request);
        return redirect('/merchant/profile');
    }
    #endregion

    #region Produk
    public function get_produk()
    {
        $id = 'M1'; //get data from session id
        $res = $this->produk->get_produk_by_id_merchant($id);
        return view('merchant-page.merchant_produk')->with('senddata', $res);
    }

    public function add_produk()
    {
        $datak = $this->kategori->get_kategori();
        return view('merchant-page.merchant_produk_add')->with('k', $datak);
    }

    public function edit_produk($id)
    {
        $data = $this->produk->searchs($id);
        $datak = $this->kategori->search_kategori($data->id_kategori);
        $datakAll = $this->kategori->get_kategori();
        return view('merchant-page.merchant_produk_edit')
                ->with('p', $data)
                ->with('k', $datak)
                ->with('kAll', $datakAll);
    }

    public function save_add_produk(Request $request)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'kategori_produk' => 'required',
            'foto_produk' => 'required'
        ]);
        $id = 'M1';
        $this->produk->Mstores($id, $request);
        return redirect('/merchant/produk'); // -> kembali ke index kategori_produkController
    }

    public function save_update_produk($id, Request $request)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'kategori_produk' => 'required',
            'foto_produk' => 'required'
        ]);

        $idx = 'M1';
        $this->produk->Mupdates($id, $request, $idx);
        return redirect('/merchant/produk'); // -> kembali ke index kategori_produkController
    }

    public function hapus_produk($id)
    {
        $this->produk->deletes($id);
        return redirect('/merchant/produk');
    }
    #endregion
}
