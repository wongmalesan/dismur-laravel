<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk;

class produkController extends Controller
{
    private $produk;
    //
    public function __construct()
    {
        $this->produk = new produk();
    }
}
