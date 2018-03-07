<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReciveOrdersTable extends Migration
{
    /**
     * Run the migrations.
     * 入库单--收货单
     * @return void
     */
    public function up()
    {
        Schema::create('recive_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string("rec_id", 64)->comment('入库单号');
            $table->dateTime('rec_time')->comment('入库日期');
            $table->string('supplier_id',32)->comment('供应商ID');
            $table->string('sh_from',32)->comment('来源店铺ID');
            $table->string('sh_to',32)->comment('入库店铺ID');
            $table->integer('op_id')->comment('操作人:经办人');
            $table->string('status',16)->comment('状态');
            $table->string('remark',255)->comment("入库单备注");

            $table->string('com_id', 32)->comment('公司编码');
            $table->string('sh_id', 32)->comment('店铺编码');
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
        Schema::dropIfExists('recive_orders');
    }
}
