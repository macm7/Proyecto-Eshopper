<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'slug', 'ref_code', 'price', 'quantity', 'availability', 'condition', 'cover_img',  'description', 'category_id'
    ];
    
    public function reviews(){
        return $this->hasMany('App\Review', 'product_id', 'id');
    }

    public function product_imgs(){
        return $this->hasMany('App\Product_Img', 'product_id', 'id');
    }

    public function categories(){
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

}
