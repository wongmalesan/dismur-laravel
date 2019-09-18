<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\member;
use App\user_dismur;
use App\wishlist;

class memberController extends Controller
{
    //
    private $member;
    private $user;
    private $wish;

    public function __construct()
    {
        $this->member = new member();
        $this->user = new user_dismur();
        $this->wish = new wishlist();
    }

    public function index(){
        if($this->user->check_login_session_member()){
            return redirect('/login')->withError('Anda Harus Login')->withInput();
        }
        $id = session()->get('id');
        $res = $this->member->get_by_id($id);
        return view('member-page.member_profile', ['member' => $res[0]]);
    }

    public function get_profile()
    {
        $id = session()->get('id');
        $res = $this->member->get_by_id($id);
        return view('member-page.member_profile', ['member' => $res[0]]);
    }

    public function edit_profile($id)
    {
        $data = $this->member->searchs($id);
        return view('member-page.member_profile_edit', ['member' => $data]);
    }

    public function get_wishlist(){
        $res = $this->wish->get_by_filterx();
        return view('member-page.member_wishlist')->with('param', $res);
    }

    public function delete_wishlist($id)
    {
        $this->wish->deletes($id);
        return back();
    }

    public function save_update_profile($id, Request $request)
    {
        $this->validate($request, [
            'nama_member' => 'required',
            'email_member' => 'required'
        ]);

        $this->member->updates($id, $request);
        return redirect('/member/profile');
    }


}
