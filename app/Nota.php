<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = ['gambar'];

    public static function store($nota)
    {
        Nota::create([
            'gambar' => $nota
        ]);
    }

    public static function get($nota)
    {
        $data = Nota::where('gambar', $nota)->first();

        return $data;
    }
}
