<?php

namespace App;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use App\member;
use Session;

class user_dismur extends Model
{
    //
    protected $table =  "user_dismurs";
    protected $fillable = ['id_user', 'email_user', 'password', 'id_detail_user', 'role_user'];
    protected $primaryKey = 'id_user';
    public $incrementing = false;

    #region session
    public function check_login_session()
    {
        if (session()->get('login') == null) {
            return true; // harus login
        } else {
            return false;
        }
    }

    public function check_login_session_admin()
    {
        if (session()->get('login') != null && strtolower(session()->get('role')) == 'admin') {
            return false; // harus login
        } else {
            return true;
        }
    }

    public function check_login_session_merchant()
    {
        if (session()->get('login') != null && strtolower(session()->get('role')) == 'merchant') {
            return false; // harus login
        } else {
            return true;
        }
    }

    public function check_login_session_member()
    {
        if (session()->get('login') != null && strtolower(session()->get('role')) == 'member') {
            return false; // harus login
        } else {
            return true;
        }
    }
    #endregion

    public function get_all()
    {
        return user_dismur::all()->sortBy('created_at');
    }

    public function get_by_filter()
    {
        return user_dismur::where('id_produk', 'P0')->get();
    }

    public function get_produk_by_id_merchant($id)
    {
        return user_dismur::where('id_merchant', $id)->get();
    }

    public function searchs($ids)
    {
        return user_dismur::find($ids);;
    }

    public function stores($request, $id, $role)
    {
        $member = new member();
        ['id_user', 'email_user', 'password', 'id_detail_user', 'role_user'];
        $hash_password_saya = Hash::make($request->password);
        user_dismur::create([
            'id_user' => 'U'.$id, // generateProduk
            'email_user' => $request->username,
            'password' => $hash_password_saya,
            'id_detail_user' => $id,
            'role_user' => $role,
        ]);
    }

    public function saveSession($id, $email, $role){
        Session::put('login', 'LOGIN');
        Session::put('id', $id);
        Session::put('username', $email);
        Session::put('role', $role);
    }

    public function logout(){
        session()->flush();
        return redirect('/login');
    }
}
