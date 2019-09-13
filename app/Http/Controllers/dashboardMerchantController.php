<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardMerchantController extends Controller
{
    //
    public function index(){
        $merchant = DB::table('merchants')->get();
        return view('dashboard-merchant', ['merchant' => $merchant[0]]);
    }
}
