<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model
{
    protected $table = 'payment_details';
    protected $fillable = ['payment_id', 'menu_id', 'qty', 'price'];

    static function storePaymentDetail($penjualanId, $request)
    {
        $data = [];
        $store = [];
        $totalHarga = 0;
        foreach ($request->menu as $key => $value) {
            if ($value != null) {
                $store['items'][] = [
                    'payment_id' => $penjualanId,
                    'menu_id' => $key,
                    'price' => Menu::firstMenu($key)->new_price,
                    'qty' => $value
                ];

                $data['items'][] = [
                    'name' => Menu::firstMenu($key)->name,
                    'price' => Menu::firstMenu($key)->new_price,
                    'qty' => $value
                ];

                $totalHarga += Menu::firstMenu($key)->new_price * $value;
            }
        }
        PaymentDetail::insert($store['items']);
        Payment::whereId($penjualanId)->update(['total' => $totalHarga]);
        
        $data['total'] = $totalHarga;
        return $data;
    }

    static function getPaymentDetail($penjualanId)
    {
        $data = PaymentDetail::where('payment_id', $penjualanId)->get();

        return $data;
    }
}
