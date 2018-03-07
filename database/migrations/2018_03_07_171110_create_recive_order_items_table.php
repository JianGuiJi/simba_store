<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReciveOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     * 入库单操作日志
     * @return void
     */
    public function up()
    {
        Schema::create('recive_order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string("rec_id", 64)->comment('入库单号');
            $table->string('barcode', 64)->comment('商品条码');
            $table->string('sku', 64)->comment('SKU：stock keeping unit');
            $table->string('sku_name', 50)->comment('商品名称');
            $table->string('spec_name', 20)->comment('规格');
            $table->string('unit', 8)->comment('单位');
            $table->dateTime('expire_time')->comment('商品过期时间');
            $table->integer('num')->comment('入库数量');
            $table->string('com_id', 32)->comment('公司编码');
            $table->string('user_id',32)->comment('用户uuid');
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
        Schema::dropIfExists('recive_order_items');
    }
}
