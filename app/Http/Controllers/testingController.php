<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\merchant;
use App\produk;
use App\member;

class testingController extends Controller
{
    //
    public function Testing(Request $request){
        echo session()->get('login');
        echo session()->get('id');
        echo session()->get('username');
        echo session()->get('role');
    }

    public function TestingPost(Request $request){
        // $questionId = Input::get('krow');
        // $question = Question::find($questionId);
        return $request->all();
    }
}
