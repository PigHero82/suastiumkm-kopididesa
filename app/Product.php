<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['department_id', 'category_id', 'name', 'unit', 'stock'];

    public static function getProduct()
    {
        $data = Product::all();

        return $data;
    }

    public static function storeProduct($request)
    {
        Product::create([
            'department_id' => $request->department_id,
            'category_id'   => $request->category_id,
            'name'          => $request->nama,
            'unit'          => $request->satuan,
            'stock'         => $request->jumlah
        ]);
    }

    public static function firstProduct($id)
    {
        $data = Product::whereId($id)->first();

        return $data;
    }

    public static function updateProduct($request)
    {
        Product::whereId($request->id)->update([
            'name'  => $request->nama,
            'unit'  => $request->satuan
        ]);
    }

    public static function deleteProduct($id)
    {
        Product::whereId($id)->delete();
    }

    public static function storeStok($request)
    {
        $length = count($request->nama);
        for ($i=0; $i < $length ; $i++) {
            $data = Product::whereId($request->nama[$i])->first();
            Product::whereId($request->nama[$i])->update([
                'qty' => $data->jumlah + $request->jumlah[$i]
            ]);
        }
    }
}
