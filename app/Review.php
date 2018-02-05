<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'name', 'email', 'review', 'product_id'
    ];

    public function products(){
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }

}
