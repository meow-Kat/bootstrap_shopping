<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->longText('product_photo')->comment('產品圖片')->default('https://placeholder.pics/svg/400x400');
            $table->char('product_name')->comment('產品名稱');
            $table->text('product_context')->comment('產品內容');
            $table->integer('product_price')->comment('價格');
            $table->boolean('top')->comment('置頂')->default('0');
            $table->string('product_size')->comment('尺寸');
            $table->string('product_color')->comment('顏色');
            $table->integer('product_type_id')->comment('對應的種類id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
