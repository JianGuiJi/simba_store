<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSkusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_skus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->comment('商品名称');
            $table->string('sku', 64)->comment('商品条码+规格');
            $table->string('barcode', 64)->comment('商品条码');
            $table->string('spec_name', 20)->comment('规格');
            $table->string('unit', 10)->comment("单位");
            $table->string('brand_uuid', 64)->comment('品牌ID');
            $table->string('category_uuid', 64)->comment('类目ID');
            $table->decimal('sale_price', 8, 2)->comment('售价');
            $table->decimal('vip_price', 8, 2)->comment('会员价');
            $table->timestamps();
            $table->unique('sku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_skus');
    }
}
