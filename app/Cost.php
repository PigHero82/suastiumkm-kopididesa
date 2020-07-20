<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    protected $table = 'costs';
    protected $fillable = ['product_id', 'nota_id', 'qty', 'price'];

    public static function storeCost($request, $id)
    {
        $length = count($request->nama);
        for ($i=0; $i < $length ; $i++) { 
            Pengeluaran::create([
                'product_id' => $request->nama[$i],
                'nota_id' => $id,
                'qty' => $request->jumlah[$i],
                'price' => $request->harga[$i],
            ]);
        }
    }
}
