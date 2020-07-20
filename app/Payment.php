<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Auth;

class Payment extends Model
{
    protected $table = 'payments';
    protected $fillable = ['user_id', 'total', 'status', 'description'];

    static function firstPayment($id)
    {
        $data = Payment::whereId($id)->first();

        return $data;
    }

    static function getPaymentByKasir($id)
    {
        $data = Payment::where('user_id', $id)
                            // ->where('status', 1)
                            ->whereRaw('date(created_at) = ?', date("Y-m-d"))
                            ->get();

        return $data;
    }

    static function storePayment()
    {
        Payment::create(['user_id' => Auth::user()->id]);

        $data = Payment::latest()->first();

        return $data->id;
    }

    static function validPayment($request)
    {
        Payment::whereId($request->id)->update([
            'status' => 1,
            'description' => $request->description
        ]);
    }
}
