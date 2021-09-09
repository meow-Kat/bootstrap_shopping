<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productImg extends Model
{
    //
    protected $fillable = ['photo', 'product_id'];

    public function products()
    {
        return $this->hasOne('App\product','id', 'product_id');
    }
}
