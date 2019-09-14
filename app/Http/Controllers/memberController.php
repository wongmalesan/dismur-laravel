<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\member;

class memberController extends Controller
{
    //
    private $member;

    public function __construct()
    {
        $this->member = new member();
    }

    public function get_profile()
    {
        $id = 'MB1'; //get data from session id
        $res = $this->member->get_by_id($id);
        return view('member-page.member_profile', ['member' => $res[0]]);
    }

    public function edit_profile($id)
    {
        $data = $this->member->searchs($id);
        return view('member-page.member_profile_edit', ['member' => $data]);
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
