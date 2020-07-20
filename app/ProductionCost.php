<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductionCost extends Model
{
    protected $table = 'production_costs';
    protected $fillable = ['product_id', 'menu_id', 'qty'];
}
