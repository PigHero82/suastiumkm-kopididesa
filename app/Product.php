<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['department_id', 'category_id', 'name', 'unit', 'stock'];
}
