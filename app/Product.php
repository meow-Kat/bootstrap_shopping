<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const SIZE = [
        'extra_small' => 'XS', 'small' => 'S', 'medium' => 'M', 'large' => 'L', 'extra_large' => 'XL', 'extra_extra_large' => 'XXL'
    ];


    // $fillable 資料庫才能存     資料表有什麼94都要寫進去 id是主鍵不用寫
    protected $fillable = ['product_classify', 'product_photo', 'product_name', 'product_context', 'product_price', 'top', 'product_type_id', 'product_size', 'product_color'];

    // 根據不同的 attribute 要寫在不同地方
    //  只要有資料透過 model 進行存取(新增/修改/使用)
    public function setColorAttribute($value)
    {
        $this->attributes['color'] = json_encode($value);
    }
    // 只要有資料透過 model 進行存取（新增、修改、使用）修改器 必須放在關聯上面 有優先順序

    public function getSizeAttribute($value)
    {
        return $this->attributes['size'] = json_decode($value);
    }

    public function getColorAttribute($value)
    {
        return $this->attributes['color'] = json_decode($value);
    }

    public function category()
    {
        return $this->hasOne('App\ProductCategory', 'id', 'product_category_id');
    }



    public function type()
    {
        return $this->hasOne('App\ProductType', 'id', 'product_type_id');
    }

    public function productImgs()
    {
        return $this->hasMany('App\ProductImg', 'product_id', 'id');

    }
}
