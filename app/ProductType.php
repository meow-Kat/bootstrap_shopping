<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    //
    protected $fillable = ['type_name'];

    public function products()
    {
        return $this->hasMany('App\product','product_type_id', 'id'); 
    }
}
