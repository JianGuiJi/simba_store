<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendOrdersTable extends Migration
{
    /**
     * Run the migrations.
     * 发货单/配货单
     * @return void
     */
    public function up()
    {
        Schema::create('send_order', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string("send_id", 64)->comment('配货单号');
            $table->string('sh_from',32)->comment('来源店铺ID');
            $table->string('sh_to',32)->comment('入库店铺ID');
//            $table->integer('op_id')->comment('操作人:经办人');
            $table->string('status',16)->comment('状态');
            $table->integer('prt_count')->comment('打印次数')->nullable();

            $table->string('com_id', 32)->comment('公司编码');
            $table->string('user_id',32)->comment('创建人：用户uuid');
//            $table->string('sh_id', 32)->comment('店铺编码');

            $table->dateTime('created_time')->comment('创建时间');
            $table->dateTime('updated_time')->comment('修改时间');
            $table->dateTime('left_time')->comment('出库时间');
            $table->dateTime('close_time')->comment('作废时间')->nullable();
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
        Schema::dropIfExists('send_orders');
    }
}
