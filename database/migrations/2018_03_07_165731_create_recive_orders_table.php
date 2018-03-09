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
        Schema::create('receive_order', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string("rec_id", 64)->comment('入库单号');
            $table->unique('rec_id');
            $table->dateTime('rec_time')->comment('入库日期');
            $table->string('source_id', 32)->comment('来源单的uuid')->nullable();
            $table->string('supplier_id', 32)->comment('供应商uuid')->nullable();
            $table->string('sh_from', 32)->comment('来源店铺ID')->nullable();
            $table->string('sh_to', 32)->comment('入库店铺ID');
            $table->integer('op_id')->comment('操作人:经办人')->nullable();
            $table->string('sc_type', 16)->comment('来源类型');//采购单，配货单，自建
            $table->string('status', 16)->comment('状态');
            $table->string('remark', 255)->comment("入库单备注")->nullable();

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
        Schema::dropIfExists('recive_orders');
    }
}
