<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     * 配货单操作日志
     * @return void
     */
    public function up()
    {
        Schema::create('send_order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string("send_id", 64)->comment('配货单号');
            $table->string('barcode', 64)->comment('商品条码');
            $table->string('sku', 64)->comment('SKU：stock keeping unit');
            $table->string('sku_name', 50)->comment('商品名称');
            $table->string('spec_name', 20)->comment('规格');
            $table->string('unit', 8)->comment('单位');
//            $table->dateTime('expire_time')->comment('商品过期时间');
            $table->integer('num')->comment('出库数量');
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
        Schema::dropIfExists('send_order_items');
    }
}
