<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string("check_id", 64)->comment('盘点单号');
            $table->dateTime('check_time')->comment('盘点时间');

            $table->integer('op_id')->comment('操作人:盘点人');
            $table->string('status',16)->comment('状态');
            $table->integer('prt_count')->comment('打印次数');
            $table->string('com_id', 32)->comment('公司编码');
            $table->string('user_id',32)->comment('用户uuid');
            $table->string('sh_id', 32)->comment('店铺编码');
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
        Schema::dropIfExists('check_orders');
    }
}
