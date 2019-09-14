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
        $model = new member();
        return $model->generateReferalId();
    }

    public function TestingPost(Request $request){
        // $questionId = Input::get('krow');
        // $question = Question::find($questionId);
        return $request->all();
    }
}
