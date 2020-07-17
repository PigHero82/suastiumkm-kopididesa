<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = 'pengeluaran';
    protected $fillable = ['idbahan', 'idnota', 'jumlah', 'harga'];

    public static function store($request, $id)
    {
        $length = count($request->nama);
        for ($i=0; $i < $length ; $i++) { 
            Pengeluaran::create([
                'idbahan' => $request->nama[$i],
                'idnota' => $id,
                'jumlah' => $request->jumlah[$i],
                'harga' => $request->harga[$i],
            ]);
        }
    }
}
