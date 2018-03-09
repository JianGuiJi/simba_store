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
        Schema::create('send_order_detail', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string("send_order_id", 64)->comment('配货单id');
            $table->string('barcode', 64)->comment('商品条码');
            $table->string('sku', 64)->comment('SKU：stock keeping unit');
            $table->string('sku_name', 50)->comment('商品名称');
            $table->string('spec_name', 20)->comment('规格');
            $table->string('unit', 8)->comment('单位');
//            $table->dateTime('expire_time')->comment('商品过期时间');
            $table->integer('num')->comment('出库数量');

            $table->string('com_id', 32)->comment('公司编码');
//            $table->string('sh_id', 32)->comment('店铺编码')->nullable();
            $table->string('user_id', 32)->comment('用户uuid');

            $table->dateTime('created_time')->comment('创建时间');
            $table->dateTime('updated_time')->comment('修改时间');
            $table->dateTime('close_time')->comment('作废时间')->nullable();
//            $table->dateTime('deleted_time')->comment('删除时间')->nullable();
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
