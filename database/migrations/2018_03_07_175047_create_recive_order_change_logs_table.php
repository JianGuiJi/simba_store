<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReciveOrderChangeLogsTable extends Migration
{
    /**
     * Run the migrations.
     * 入库单操作日志
     * @return void
     */
    public function up()
    {
        Schema::create('receive_order_change_log', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string("receive_order_id", 64)->comment('入库单id');
            $table->string('status',16)->comment('状态');
            $table->string('content')->comment('日志内容');
            $table->string('sh_id', 32)->comment('店铺编码');
            $table->string('com_id', 32)->comment('公司编码');
            $table->string('user_id',32)->comment('用户uuid');

            $table->dateTime('created_time')->comment('创建时间');
//            $table->dateTime('updated_time')->comment('修改时间');
//            $table->dateTime('deleted_time')->comment('删除时间')->nullable();
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
        Schema::dropIfExists('recive_order_change_logs');
    }
}
