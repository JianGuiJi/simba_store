<?php

//use Illuminate\Support\Facades\Schema;
use Jialeo\LaravelSchemaExtend\Schema;
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
        Schema::create('check_order_change_log', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string("check_order_id", 64)->comment('盘点单id');
            $table->string("check_id", 64)->comment('盘点单号');
            $table->string('status',16)->comment('状态');
            $table->string('content')->comment('日志内容');
            $table->string('company_id', 32)->comment('公司id');
            $table->string('user_id',32)->comment('用户uuid');
            $table->dateTime('created_time')->comment('创建时间');
            $table->dateTime('updated_time')->comment('修改时间');
            $table->comment = '盘点单日志表';
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
