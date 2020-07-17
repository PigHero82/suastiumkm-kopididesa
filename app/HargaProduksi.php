<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HargaProduksi extends Model
{
    protected $table = 'harga_produksi';
    protected $fillable = ['idmenu', 'idbahan', 'jumlah'];
}
