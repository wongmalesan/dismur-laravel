<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dismurController extends Controller
{
    //
    public function index(){
        return view('dismur-home-page.dismur_home');
    }
}
