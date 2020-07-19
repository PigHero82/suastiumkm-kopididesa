<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    protected $table = 'detail_penjualan';
    protected $fillable = ['penjualan_id', 'menu_id', 'jumlah', 'harga'];

    static function storeDetailPenjualan($penjualanId, $request)
    {
        $data = [];
        $store = [];
        $totalHarga = 0;
        foreach ($request->menu as $key => $value) {
            if ($value != null) {
                $store['items'][] = [
                    'penjualan_id' => $penjualanId,
                    'menu_id' => $key,
                    'harga' => Menu::firstMenu($key)->harga,
                    'jumlah' => $value
                ];

                $data['items'][] = [
                    'nama' => Menu::firstMenu($key)->nama,
                    'harga' => Menu::firstMenu($key)->harga,
                    'jumlah' => $value
                ];

                $totalHarga += Menu::firstMenu($key)->harga * $value;
            }
        }
        DetailPenjualan::insert($store['items']);
        Penjualan::whereId($penjualanId)->update(['total_harga' => $totalHarga]);
        
        $data['total_harga'] = $totalHarga;
        return $data;
    }

    static function getDetailPenjualan($penjualanId)
    {
        $data = DetailPenjualan::where('penjualan_id', $penjualanId)->get();

        return $data;
    }
}
