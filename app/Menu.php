<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $fillable = ['nama', 'harga', 'gambar', 'kategori'];

    static function firstMenu($id)
    {
        $data = Menu::whereId($id)->first();

        return $data;
    }
}
