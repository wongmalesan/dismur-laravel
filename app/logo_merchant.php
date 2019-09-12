<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class logo_merchant extends Model
{
    //
    protected $table =  "logo_merchants";
    protected $fillable = ['id_logo_merchants', 'alamat_logo'];
    protected $primaryKey = 'id_logo_merchants';
    public $incrementing = false;

    public function get_all()
    {
        return logo_merchant::all();
    }

    public function get_by_filter()
    {
        return logo_merchant::where('id_logo_merchants', 'P0')->get();
    }

    public function searchs($ids)
    {
        return logo_merchant::find($ids);;
    }

    public function stores($request)
    {
        logo_merchant::create([
            'id_logo_merchants' => '00', // generatelogo_merchant
            'alamat_logo' => now()->timestamp,
        ]);
    }

    public function deletes($id)
    {
        $p = logo_merchant::find($id);
        $p->delete();
    }

    public function updates($id, $request)
    {
        $p = logo_merchant::find($id);
        $p->alamat_logo = $request->alamat_logo;
        $p->save();
    }
}
