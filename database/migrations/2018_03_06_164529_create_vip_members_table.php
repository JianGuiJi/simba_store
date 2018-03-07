<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVipMembersTable extends Migration
{
    /**
     * Run the migrations.
     * 会员表
     * @return void
     */
    public function up()
    {
        Schema::create('vip_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 16);
            $table->string('tel', 24);
            $table->string('mobile', 24);
            $table->string('sex', 8);
            $table->string('birthday', 20);
            $table->integer('point')->comment('会员积分');//为字段增加注释（仅限 MySQL）
            $table->string('remark');
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
        Schema::dropIfExists('vip_members');
    }
}
