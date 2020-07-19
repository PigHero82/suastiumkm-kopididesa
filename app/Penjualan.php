<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';
    protected $fillable = ['user_id', 'total_harga', 'status'];

    static function firstPenjualan($id)
    {
        $data = Penjualan::whereId($id)->first();

        return $data;
    }

    static function getPenjualanByKasir($id)
    {
        $data = Penjualan::where('user_id', $id)
                            // ->where('status', 1)
                            ->whereRaw('date(created_at) = ?', date("Y-m-d"))
                            ->get();

        return $data;
    }

    static function storePenjualan()
    {
        Penjualan::create(['user_id' => Auth::user()->id]);

        $data = Penjualan::latest()->first();

        return $data->id;
    }
}
