<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'tag', 'slug', 'blog_id'
    ];

    public function blogs(){
        return $this->belongsTo('App\Blog', 'blog_id', 'id');
    }
}
