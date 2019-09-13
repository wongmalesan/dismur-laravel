<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_produk;
use App\merchant;
use App\produk;

class adminController extends Controller
{
    private $kategori;
    private $merchant;
    private $produk;

    /**
     * ArticlesController constructor.
     */
    public function __construct()
    {
        $this->kategori = new kategori_produk();
        $this->merchant = new merchant();
        $this->produk = new produk();
    }

    public function index()
    {
        $kp = $this->kategori->get_kategori();
        $m = $this->merchant->get_all();
        return view('admin')->with('kp', $kp)->with('m', $m);
        //return view('admin')->with('m', $m);
    }

    #region Merchant
    public function get_merchant(){
        $m = $this->merchant->get_all();
        return view('Amerchant')->with('m', $m);
    }

    public function add_merchant(){
        return view('Amerchant_add');
    }

    public function edit_merchant($id){
        $data = $this->merchant->searchs($id);
        return view('Amerchant_edit', ['m' => $data]); //-> pergi ke halaman edit kategori
    }

    public function proses_add_merchant(Request $request){
        $this->validate($request, [
            'nama_merchant' => 'required',
            'alamat_merchant' => 'required',
        ]);

        $this->merchant->stores($request);
        return redirect('/admin/merchant');
    }

    public function proses_update_merchant($id, Request $request){

        $this->validate($request, [
            'nama_merchant' => 'required',
            'alamat_merchant' => 'required'
        ]);

        $this->merchant->updates($id, $request);
        return redirect('/admin/merchant');
    }

    public function hapus_merchant($id){
        $this->merchant->deletes($id);
        return redirect('/admin/merchant');
    }
    #endregion

    #region Produk
    public function get_produk(){
        $data = $this->produk->get_all();
        $datak = $this->kategori->get_kategori();
        return view('Aproduk')->with('p', $data)->with('k', $datak);
    }

    public function add_produk(){
        $datak = $this->kategori->get_kategori();
        return view('Aproduk_add')->with('k', $datak);
    }

    public function edit_produk($id){
        $data = $this->merchant->searchs($id);
        return view('Aproduk', ['p' => $data]); //-> pergi ke halaman edit kategori
    }

    public function proses_add_produk(Request $request){
        $this->validate($request, [
            'nama_produk' => 'required',
            'kategori_produk' => 'required',
        ]);

        $this->produk->stores($request);
        return redirect('/admin/produk');
    }

    public function proses_update_produk($id, Request $request){

        $this->validate($request, [
            'nama_merchant' => 'required',
            'alamat_merchant' => 'required'
        ]);

        $this->merchant->updates($id, $request);
        return redirect('/admin/produk');
    }

    public function hapus_produk($id){
        $this->merchant->deletes($id);
        return redirect('/admin/produk');
    }
    #endregion
}
