<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     * 店铺表
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sh_id', 32)->comment('店铺编码');
            $table->string('name', 32)->comment('名称');
            $table->string('sh_admin', 32)->comment('店长');
            $table->string('status', 16)->comment('状态');
            $table->string('mobile', 24)->comment('手机');
            $table->string('tel', 24)->comment('电话');
            $table->string('prov', 16)->comment('省');
            $table->string('city', 16)->comment('市');
            $table->string('dist', 16)->comment('区');
            $table->string('address')->comment('地址');
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
        Schema::dropIfExists('shops');
    }
}
