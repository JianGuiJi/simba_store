<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginLogsTable extends Migration
{
    /**
     * Run the migrations.
     * 登录日志
     * @return void
     */
    public function up()
    {
        Schema::create('login_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('last_login_time')->comment('登录的时间');
            $table->string('last_login_ip')->comment('登录的ip');
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
        Schema::dropIfExists('login_logs');
    }
}
