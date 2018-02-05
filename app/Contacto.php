<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable = [
        'name', 'address', 'mail', 'state', 'phone','contact_info', 'facebook' , 'twitter', 'google', 'youtube'
    ];
}
