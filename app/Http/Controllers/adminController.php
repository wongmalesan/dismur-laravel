<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_produk;
use App\merchant;
use App\Http\Controllers\kategori_produkController;

class adminController extends Controller
{
    private $kategori;
    private $merchant;

    /**
     * ArticlesController constructor.
     */
    public function __construct()
    {
        $this->kategori = new kategori_produk();
        $this->merchant = new merchant();
    }

    public function index()
    {
        $kp = $this->kategori->get_kategori();
        $m = $this->merchant->get_all();
        return view('admin')->with('kp', $kp)->with('m', $m);
    }
}
