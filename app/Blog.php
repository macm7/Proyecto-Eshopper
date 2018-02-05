<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'slug', 'image_name', 'content', 'user_id'
    ];

    public function comments(){
        return $this->hasMany('App\Comment', 'blog_id', 'id');
    }

    public function tags(){
        return $this->hasMany('App\Tag', 'blog_id', 'id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
