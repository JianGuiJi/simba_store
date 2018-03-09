<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     * 订单表 (销售订单-门店)
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string('eid', 32)->comment('订单编号');
            $table->integer('total_sku')->comment('商品SKU总数');
            $table->integer('total_barcode')->comment('商品条码总数');
            $table->integer('total_num')->comment('总数件数');
            $table->integer('total_money')->comment('应付金额');
            $table->integer('discount_money')->comment('折扣金额');
            $table->integer('discount_ratio')->comment('折扣比例');
            $table->integer('real_pay')->comment('实付金额=total_money-discount_money|total_money*discount_ratio/100');
            $table->string('com_id', 32)->comment('公司编码');
            $table->string('user_id', 32)->comment('用户uuid');
            $table->string('status', 16)->comment('状态');
            $table->timestamps();
            $table->unique('eid');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
