<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    protected $table = 'stok';
    protected $fillable = ['nama', 'satuan', 'jumlah', 'loket'];

    public static function get()
    {
        $data = Stok::all();

        return $data;
    }

    public static function store($request)
    {
        Stok::create([
            'nama' => $request->nama,
            'satuan' => $request->satuan,
            'jumlah' => $request->jumlah
        ]);
    }

    public static function getSingle($id)
    {
        $data = Stok::whereId($id)->first();

        return $data;
    }

    public static function updateStok($request)
    {
        Stok::whereId($request->id)->update([
            'nama' => $request->nama,
            'satuan' => $request->satuan
        ]);
    }

    public static function deleteStok($id)
    {
        Stok::whereId($id)->delete();
    }

    public static function storeStok($request)
    {
        $length = count($request->nama);
        for ($i=0; $i < $length ; $i++) {
            $data = Stok::whereId($request->nama[$i])->first();
            Stok::whereId($request->nama[$i])->update([
                'jumlah' => $data->jumlah + $request->jumlah[$i]
            ]);
        }
    }
}
