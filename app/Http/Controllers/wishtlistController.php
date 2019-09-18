<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\wishlist;

class wishtlistController extends Controller
{
    //
    private $instance;

    public function __construct()
    {
        $this->instance = new wishlist();
    }

    public function get()
    {
        //$this->instance->get_by_filter();
        $res = $this->instance->get_by_filterx();
        return view('member-page.member_wishlist')->with('param', $res);
    }

    public function add($id_produk)
    {
        $this->instance->stores($id_produk);
        return back();
    }

    public function delete($id)
    {
        $this->instance->deletes($id);
        return back();
    }
}
