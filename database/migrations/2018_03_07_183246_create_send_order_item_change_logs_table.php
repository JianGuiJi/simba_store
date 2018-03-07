<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendOrderItemChangeLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_order_item_change_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string("send_id", 64)->comment('配货单号');
            $table->string('status',16)->comment('状态');
            $table->string('content')->comment('日志内容');
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
        Schema::dropIfExists('send_order_item_change_logs');
    }
}
