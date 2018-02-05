<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Img extends Model
{
    protected $fillable = [
        'name', 'images'
    ];

    public function products(){
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }
}
