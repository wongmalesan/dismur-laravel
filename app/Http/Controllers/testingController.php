<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\merchant;
use App\produk;

class testingController extends Controller
{
    //
    public function Testing(Request $request){
        $last_id = produk::all()->last();
        if($last_id == null){
            return 'Kosong';
        }else{
            return 'ada';
        }
        //$split = substr($last_id_produk->id_produk, '1');
        //$new_id = 'M'.($split+1);
        //return $$last_id_produk;
    }

    public function TestingPost(Request $request){
        // $questionId = Input::get('krow');
        // $question = Question::find($questionId);
        return $request->all();
    }
}
