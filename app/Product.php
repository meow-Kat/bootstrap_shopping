<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{



    // $fillable 資料庫才能存     資料表有什麼94都要寫進去 id是主鍵不用寫
    protected $fillable = ['product_classify','product_photo' ,'product_name' , 'product_context', 'product_price', 'top','product_type_id','product_size','product_color'];

    public function setAllAttritube($value)
    {   //  只要有資料透過 model 進行存取(新增/修改/使用)
        $this->attributes['product_size'] = json_encode($value);
        $this->attributes['product_color'] = json_encode($value);
    }

    public function getAllAttritube($value)
    {   
        return $this->attributes['product_size'] = json_decode($value);
        return $this->attributes['product_color'] = json_decode($value);
    }

    public function type()
    {
        return $this->hasOne('App\ProductType','id', 'product_type_id');
    }


}
