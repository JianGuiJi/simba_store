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
        Schema::create('receive_order_detail', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string("receive_order_id", 64)->comment('入库单id');
//            $table->string("rec_id", 64)->comment('入库单号');
            $table->string('barcode', 64)->comment('商品条码');
            $table->string('sku', 64)->comment('SKU：stock keeping unit');
            $table->string('sku_name', 50)->comment('商品名称');
            $table->string('spec_name', 20)->comment('规格')->nullable();
            $table->string('unit', 8)->comment('单位')->nullable();
            $table->dateTime('expire_time')->comment('商品过期时间')->nullable();
            $table->integer('pre_num')->comment('预计入库数量');
            $table->integer('real_num')->comment('入库数量');
            $table->string('remark', 255)->comment("备注")->nullable();

            $table->string('com_id', 32)->comment('公司编码');
//            $table->string('sh_id', 32)->comment('店铺编码')->nullable();
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
        Schema::dropIfExists('recive_order_items');
    }
}
