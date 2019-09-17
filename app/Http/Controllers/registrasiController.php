<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\member;
use App\merchant;
use App\user_dismur;

class registrasiController extends Controller
{
    //
    private $member;
    private $user;
    private $merchant;

    public function __construct()
    {
        $this->member = new member();
        $this->user = new user_dismur();
        $this->merchant = new merchant();
    }

    public function index(){
        return view('form-registrasi.registration');
    }

    public function member_index(){
        return view('form-registrasi.member_reg');
    }

    public function proses_add_member(Request $request){
        $this->validate($request, [
            'nama_member' => 'required',
            'email_member' => 'required',
            'username' => 'required',
            'password_confirmation' => 'required|min:6',
            'password' => 'confirmed|min:6',
        ]);
        $this->member->stores($request);
        $id = $this->member->new_id_member;
        $this->user->stores($request, $id, 'member');
        $this->user->saveSession($id,$request->username,'member');
        return redirect('/member'); ////redirect to dashboard member
    }

    public function merchant_index(){
        return view('form-registrasi.merchant_reg');
    }

    public function proses_add_merchant(Request $request){
        $this->validate($request, [
            'nama_merchant' => 'required',
            'alamat_merchant' => 'required',
            'username' => 'required',
            'password_confirmation' => 'required|min:6',
            'password' => 'confirmed|min:6',
        ]);
        $this->merchant->stores($request);
        $id = $this->merchant->new_id_merchant;
        $this->user->stores($request, $id, 'merchant');
        $this->user->saveSession($id,$request->username,'merchant');
        return redirect('/merchant'); //redirect to dashboard merchant
    }
}
