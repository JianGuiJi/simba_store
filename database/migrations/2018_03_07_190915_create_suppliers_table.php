<?php

//use Illuminate\Support\Facades\Schema;
use Jialeo\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     * 供应商表
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string('short_name', 32)->comment('供应商简称');
            $table->string('name', 32)->comment('名称');
            $table->string('contact_tel', 24)->comment('公司固定电话')->nullable();
            $table->string('contact_name', 32)->comment('联系人姓名');
            $table->string('contact_mobile', 24)->comment('联系人电话(手机)')->nullable();
            $table->string('bank_name', 24)->comment('开户行');
            $table->string('account_name', 16)->comment('开户名');
            $table->string('account_no', 32)->comment('开户账号');
            $table->string('pay_method', 32)->comment('付款方式')->nullable();
            $table->integer('account_period_days')->comment('账期天数')->nullable();
            $table->string('tel', 24)->comment('电话')->nullable();
            $table->string('prov', 16)->comment('省')->nullable();
            $table->string('city', 16)->comment('市')->nullable();
            $table->string('dist', 16)->comment('区')->nullable();
            $table->string('address')->comment('地址')->nullable();
            $table->string('remark')->comment('备注')->nullable();
            $table->string('status', 16)->comment('状态');

            $table->string('company_id', 32)->comment('公司id');
            $table->string('user_id',32)->comment('创建人：用户uuid');
            $table->dateTime('created_time')->comment('创建时间');
            $table->dateTime('updated_time')->comment('修改时间');
            $table->comment = '供应商表';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
