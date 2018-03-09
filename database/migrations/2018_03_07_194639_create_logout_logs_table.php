<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogoutLogsTable extends Migration
{
    /**
     * Run the migrations.
     * 登出日志
     * @return void
     */
    public function up()
    {
        Schema::create('logout_log', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->dateTime('last_logout_time')->comment('登录的时间');
            $table->string('last_logout_ip')->comment('登录的ip');
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
        Schema::dropIfExists('logout_logs');
    }
}
