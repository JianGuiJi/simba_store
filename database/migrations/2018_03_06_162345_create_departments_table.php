<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     * 部门表
     * @return void
     */
    public function up()
    {
        Schema::create('department', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string('name', 20)->comment('名称');//为字段增加注释（仅限 MySQL）
            $table->string('description')->nullable();
            $table->string('company_id', 32)->comment('公司id');
            $table->string('shop_id', 32)->comment('店铺id');
            $table->string('user_id',32)->comment('用户id');
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
        Schema::dropIfExists('departments');
    }
}
