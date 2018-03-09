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
        Schema::create('product_sku', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string('name', 50)->comment('商品名称');
            $table->string('sku', 64)->comment('商品条码+规格');
            $table->unique('sku');
            $table->string('barcode', 64)->comment('商品条码');
            $table->string('spec_name', 20)->comment('规格');
            $table->string('unit', 10)->comment("单位");
            $table->string('brand_id', 64)->comment('品牌ID');
            $table->string('category_id', 64)->comment('类目ID');
            $table->integer('sale_price')->comment('售价');
            $table->integer('vip_price')->comment('会员价');
            $table->string('status',16)->comment('状态');

            $table->string('com_id', 32)->comment('公司编码');
            $table->string('sh_id', 32)->comment('店铺编码');
            $table->string('user_id', 32)->comment('用户uuid');

            $table->dateTime('created_time')->comment('创建时间');
            $table->dateTime('updated_time')->comment('修改时间');
            $table->dateTime('deleted_time')->comment('删除时间')->nullable();
//            $table->timestamps();

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
