<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HargaProduksi extends Model
{
    protected $fillable = ['idmenu', 'idbahan', 'jumlah'];
}
