<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
	
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\user_dismur;

class LoginController extends Controller
{
    //
    private $user;

    public function __construct()
    {
        $this->user = new user_dismur();
    }

    public function index(){
        return view('login');
    }

    public function check_login(Request $request){
        try {
            $user = user_dismur::where('email_user', $request->email)->get();
            echo $user[0];
            if($user[0] == null || $user[0] == ''){
                return back()->withError('Email & password Salah')->withInput();
            }else{
                if($user[0]->email_user == $request->email && Hash::check($request->password,  $user[0]->password)){
                    if(strtolower($user[0]->role_user) == 'admin'){
                        $this->user->saveSession($user[0]->id_detail_user, $user[0]->email_user, $user[0]->role_user);
                        return redirect('/admin');
                    }else if(strtolower($user[0]->role_user) == 'member'){
                        $this->user->saveSession($user[0]->id_detail_user, $user[0]->email_user, $user[0]->role_user);
                        return redirect('/member');
                    }else if(strtolower($user[0]->role_user) == 'merchant'){
                        $this->user->saveSession($user[0]->id_detail_user, $user[0]->email_user, $user[0]->role_user);
                        return redirect('/merchant');
                    }
                }else{
                    return back()->withError('Email & password Salah')->withInput();
                }
            }
        } catch (ModelNotFoundException $exception) {
            return back()->withError('Email & password Salah')->withInput();
        }
    }  

    public function logout(){
        $this->user->logout();
        return redirect('login');
    }
}
