<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckOrderItemChangeLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_order_item_change_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string("check_id", 64)->comment('盘点单号');
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
        Schema::dropIfExists('check_order_item_change_logs');
    }
}
