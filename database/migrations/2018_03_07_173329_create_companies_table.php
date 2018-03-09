<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     * 组织表--公司表
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
//            $table->string('com_id', 32)->comment('公司编码');
            $table->string('user_id',32)->comment('用户uuid');
            $table->string('name', 16)->comment('公司名称');
            $table->string('legal_name', 32)->comment('法人代表');
            $table->text('bl_path')->comment('营业执照存储路径');
            $table->text('logo_path')->comment('店铺logo路径');
            $table->string('status', 16)->comment('状态');
            $table->string('mobile', 24)->comment('手机');
            $table->string('tel', 24)->comment('电话');
            $table->string('prov', 16)->comment('省');
            $table->string('city', 16)->comment('市');
            $table->string('dist', 16)->comment('区');
            $table->string('address')->comment('地址');

            $table->dateTime('created_time');
            $table->dateTime('updated_time');
            $table->dateTime('deleted_time')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
