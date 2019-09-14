<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\kategori_produk;

class kategori_produkController extends Controller
{
    //
    private $kategori;
    public function __construct()
    {
        $this->kategori = new kategori_produk();
    }

    public function index(){
        return view('kategoriProduk', ['kategori' => $this->kategori->get_kategori()]);        
    }

    public function add_kategori()
    {
        //generate id_kategori disini
        $id = $this->kategori->generateId();
        return view('kategoriTambah')->with('id', $id); //-> pergi ke halaman tambah kategori
    }

    public function edit_kategori($id)
    {
        $kategori = new kategori_produk();
        $data = $kategori->search_kategori($id);
        return view('kategoriEdit', ['kategori' => $data]); //-> pergi ke halaman edit kategori
    }

    public function hapus($id){
        $kategori = new kategori_produk();
        $kategori->delete_kategori($id);
        //return redirect('kategori');
        return redirect('/admin/produk');
    }

    public function save_add_kategori(Request $request){
        $kategori = new kategori_produk();

        $this->validate($request, [
            'id_kategori' => 'required',
            'nama_kategori' => 'required',
        ]);

        $kategori->store_kategori($request);
        //return redirect('kategori'); // -> kembali ke index kategori_produkController
        return redirect('/admin/produk');
    }

    public function save_update_kategori($id, Request $request){
        $kategori = new kategori_produk();

        $this->validate($request, [
            'nama_kategori' => 'required'
        ]);

        $kategori-> update_kategori($id, $request);
        //return redirect('kategori'); // -> kembali ke index kategori_produkController
        return redirect('/admin/produk');
    }
}
