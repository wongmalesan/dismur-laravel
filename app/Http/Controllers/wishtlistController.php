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
        $this->instance->get_by_filter();
    }

    public function add(Request $request)
    {
        $this->instance->stores($request);
    }

    public function delete($id)
    {
        $this->instance->deletes($id);
    }
}
