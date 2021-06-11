<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();    //清空資料表
        factory(Product::class,30) -> create();   //執行 factory 30 次（產生 30 筆資料）
    }
}
