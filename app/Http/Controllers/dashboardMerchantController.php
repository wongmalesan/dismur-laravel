<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\merchant;

class dashboardMerchantController extends Controller
{
    //
    private $instance;
    public function __construct()
    {
        $this->instance = new merchant();
    }

    public function index(){
        $id = 'M1'; //get data from session id
        $res = $this->instance->get_merchant_by_id($id);
        return view('merchant-page.merchant', ['merchant' => $res[0]]);
    }
}
