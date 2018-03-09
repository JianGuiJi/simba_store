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
        Schema::create('check_order', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string("check_id", 32)->comment('盘点单单号');
            $table->dateTime('check_time')->comment('盘点时间');
            $table->string('status',16)->comment('状态');
            $table->integer('prt_count')->comment('打印次数')->nullable();
            $table->string('sh_id', 32)->comment('店铺编码');
            $table->string('com_id', 32)->comment('公司编码');
            $table->string('user_id',32)->comment('创建人：用户uuid');

            $table->dateTime('created_time')->comment('创建时间');
            $table->dateTime('updated_time')->comment('修改时间');
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
        Schema::dropIfExists('check_orders');
    }
}
