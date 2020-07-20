<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'notas';
    protected $fillable = ['img', 'total'];

    public static function store($nota)
    {
        Nota::create([
            'img' => $nota
        ]);
    }

    public static function get($nota)
    {
        $data = Nota::where('img', $nota)->first();

        return $data;
    }
}
