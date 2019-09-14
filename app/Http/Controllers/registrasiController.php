<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\member;
use App\merchant;

class registrasiController extends Controller
{
    //
    public function member_index(){
        return view('form-registrasi.member_reg');
    }

    public function proses_add_member(Request $request){
        $this->validate($request, [
            'nama_member' => 'required',
            'email_member' => 'required',
            'password_confirmation' => 'required|min:6',
            'password' => 'confirmed|min:6',
        ]);
        $member = new member();
        $member->stores($request);
        return $request; ////redirect to dashboard member
    }

    public function merchant_index(){
        return view('form-registrasi.merchant_reg');
    }

    public function proses_add_merchant(Request $request){
        $this->validate($request, [
            'nama_merchant' => 'required',
            'alamat_merchant' => 'required',
            'password_confirmation' => 'required|min:6',
            'password' => 'confirmed|min:6',
        ]);
        $merchan = new merchant();
        $merchan->stores($request);
        return $request; //redirect to dashboard merchant
    }
}
