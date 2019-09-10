<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
	
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    // public function index(){
    //     return view('login');
    // }

    public function check_login(Request $model){
        // try{
        //     $login = DB::table('merchant_user')->where('email_merchant_user',$model->email_merchant_user)->get();
        //     //$login = DB::table('user')->get();
        //     $user = $login[0]->username;
        //     $pass = $login[0]->password;
        // }catch (Exception $exec){
        //     //return redirect('/login')->withErrors(['success' => 'Pesan Berhasil']);
        //     return view('login',['data' => 0 ]);
        // }

        // if($model->username == $user && $model->password == $pass){
        //     return "Sukses";
        // }else{
        //     return "Gagal Login";
        // }

        $data = ["title" => "hello", "description" => "test test test"];
        $this->validate($model,[
            'username' => 'required',
            'password' => 'required',
            'DB' => 'Error',
        ]);
        return $model;
        

    }  
}
