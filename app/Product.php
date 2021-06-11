<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // $fillable 資料庫才能存     資料表有什麼94都要寫進去 id是主鍵不用寫
    protected $fillable = ['product_photo' ,'product_name' ,'product_classify', 'product_context', 'created_at', 'updated_at'];

}
