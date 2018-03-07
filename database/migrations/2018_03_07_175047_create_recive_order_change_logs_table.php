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
        Schema::create('recive_order_change_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string("rec_id", 64)->comment('入库单号');
            $table->string('status',16)->comment('状态');
            $table->string('content')->comment('日志内容');
            $table->string('sh_id', 32)->comment('店铺编码');
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
        Schema::dropIfExists('recive_order_change_logs');
    }
}
