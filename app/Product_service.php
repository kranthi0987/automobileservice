<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_service extends Model
{
    //
    protected $fillable = [
        'name', 'description', 'price', 'tags'
    ];
}
