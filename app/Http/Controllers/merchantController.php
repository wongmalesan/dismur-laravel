<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\merchant;

class merchantController extends Controller
{
    //
    public function index()
    {
        $merchant = new merchant();
        $id = 0; //get from session login
        return view('merchant', ['merchant' => $merchant->get_merchant_by_id($id)]);
    }

    public function add()
    {
        //generate id disini
        return view('merchantTambah'); //-> pergi ke halaman tambah kategori
    }

    public function edit($id)
    {
        $merchant = new merchant();
        $data = $merchant->searchs($id);
        return view('merchantEdit', ['merchant' => $data]); //-> pergi ke halaman edit kategori
    }

    public function hapus($id)
    {
        $merchant = new merchant();
        $merchant->deletes($id);
        return redirect('merchant');
    }

    public function save_add(Request $request)
    {
        $merchant = new merchant();

        $this->validate($request, [
            'nama_merchant' => 'required',
            'alamat_merchant' => 'required'
        ]);

        $merchant->stores($request);
        return redirect('merchant'); // -> kembali ke index kategori_produkController
    }

    public function save_update($id, Request $request)
    {
        $merchant = new merchant();

        $this->validate($request, [
            'nama_merchant' => 'required',
            'alamat_merchant' => 'required'
        ]);

        $merchant->updates($id, $request);
        return redirect('merchant'); // -> kembali ke index kategori_produkController
    }
}
