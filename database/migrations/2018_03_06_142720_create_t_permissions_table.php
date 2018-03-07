<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     * 权限表
     * @return void
     */
    public function up()
    {
        Schema::create('t_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',20)->comment('名称');//为字段增加注释（仅限 MySQL）
            $table->string('description');
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
        Schema::dropIfExists('t_permissions');
    }
}
