<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_produk;
use App\merchant;
use App\produk;
use App\admin;
use App\member;

class adminController extends Controller
{
    private $kategori;
    private $merchant;
    private $produk;
    private $admin;
    private $member;

    /**
     * ArticlesController constructor.
     */
    public function __construct()
    {
        $this->kategori = new kategori_produk();
        $this->merchant = new merchant();
        $this->produk = new produk();
        $this->admin = new admin();
        $this->member = new member();
    }

    public function index()
    {
        $kp = $this->kategori->get_kategori();
        $m = $this->merchant->get_all();
        return view('admin')->with('kp', $kp)->with('m', $m);
    }

    #region Merchant
    public function get_merchant()
    {
        $m = $this->merchant->get_all();
        return view('admin-page.Amerchant')->with('m', $m);
    }

    public function add_merchant()
    {
        return view('admin-page.Amerchant_add');
    }

    public function edit_merchant($id)
    {
        $data = $this->merchant->searchs($id);
        return view('admin-page.Amerchant_edit', ['m' => $data]); //-> pergi ke halaman edit kategori
    }

    public function proses_add_merchant(Request $request)
    {
        $this->validate($request, [
            'nama_merchant' => 'required',
            'alamat_merchant' => 'required',
        ]);

        $this->merchant->stores($request);
        return redirect('/admin/merchant');
    }

    public function proses_update_merchant($id, Request $request)
    {

        $this->validate($request, [
            'nama_merchant' => 'required',
            'alamat_merchant' => 'required'
        ]);

        $this->merchant->updates($id, $request);
        return redirect('/admin/merchant');
    }

    public function hapus_merchant($id)
    {
        $this->merchant->deletes($id);
        return redirect('/admin/merchant');
    }
    #endregion

    #region Produk
    public function get_kategori(){
        $datak = $this->kategori->get_kategori();
        return view('admin-page.Akategori')->with('k', $datak);
    }

    public function get_produk()
    {
        $data = $this->produk->get_all();
        return view('admin-page.Aproduk')->with('p', $data);
    }

    public function add_produk()
    {
        $datak = $this->kategori->get_kategori();
        $dataMerchant = $this->merchant->get_all();
        return view('admin-page.Aproduk_add')
                ->with('k', $datak)
                ->with('merchant', $dataMerchant);
    }

    public function edit_produk($id)
    {
        $data = $this->produk->searchs($id);
        $datak = $this->kategori->search_kategori($data->id_kategori);
        $datakAll = $this->kategori->get_kategori();
        $dataMerchant = $this->merchant->get_all();
        return view('admin-page.Aproduk_edit')->with('p', $data)
            ->with('k', $datak)
            ->with('kAll', $datakAll)
            ->with('merchant', $dataMerchant);
    }

    public function proses_add_produk(Request $request)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'kategori_produk' => 'required',
            'foto_produk' => 'required'
        ]);

        $this->produk->ADstores($request);
        return redirect('/admin/produk');
    }

    public function proses_update_produk($id, Request $request)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'kategori_produk' => 'required',
        ]);

        $this->produk->ADupdates($id, $request);
        return redirect('/admin/produk');
        //return $request;
    }

    public function hapus_produk($id)
    {
        $this->produk->deletes($id);
        return redirect('/admin/produk');
    }
    #endregion

    #region Data Admin
    public function get_admin()
    {
        $data = $this->admin->get_all();
        return view('admin-page.Adata_admin')->with('ad', $data);
    }

    public function add_admin()
    {
        return view('admin-page.Adata_admin_add');
    }

    public function edit_admin($id)
    {
        $data = $this->admin->searchs($id);
        return view('admin-page.Adata_admin_edit')->with('ad', $data);
    }

    public function proses_add_admin(Request $request)
    {
        $this->validate($request, [
            'nama_admin' => 'required',
            'email_admin' => 'required',
        ]);

        $this->admin->stores($request);
        return redirect('/admin/dataAdmin');
    }

    public function proses_update_admin($id, Request $request)
    {

        $this->validate($request, [
            'nama_admin' => 'required',
            'email_admin' => 'required',
        ]);

        $this->admin->updates($id, $request);
        return redirect('/admin/dataAdmin');
    }

    public function hapus_admin($id)
    {
        $this->admin->deletes($id);
        return redirect('/admin/dataAdmin');
    }

    #endregion

    #region Data Member
    public function get_member()
    {
        $data = $this->member->get_all();
        return view('admin-page.Amember')->with('senddata', $data);
    }

    public function add_member()
    {
        return view('admin-page.Amember_add');
    }

    public function edit_member($id)
    {
        $data = $this->member->searchs($id);
        return view('admin-page.Amember_edit')->with('senddata', $data);
    }

    public function proses_add_member(Request $request)
    {
        $this->validate($request, [
            'nama_member' => 'required',
            'email_member' => 'required',
        ]);

        $this->member->stores($request);
        return redirect('/admin/member');
    }

    public function proses_update_member($id, Request $request)
    {

        $this->validate($request, [
            'nama_member' => 'required',
            'email_member' => 'required',
        ]);

        $this->member->updates($id, $request);
        return redirect('/admin/member');
    }

    public function hapus_member($id)
    {
        $this->member->deletes($id);
        return redirect('/admin/member');
    }
    #endregion
}
