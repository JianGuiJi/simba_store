<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('supplier_id', 32)->comment('编码');
            $table->string('name', 32)->comment('名称');
            $table->string('contact_tel', 24)->comment('公司固定电话');
            $table->string('contact_name', 32)->comment('联系人姓名');
            $table->string('contact_mobile', 24)->comment('联系人电话(手机)');
            $table->string('bank_name', 24)->comment('开户行');
            $table->string('account_name', 16)->comment('开户名');
            $table->string('account_no', 32)->comment('开户账号');
            $table->string('pay_method', 32)->comment('付款方式');
            $table->integer('account_period_days')->comment('账期天数');
            $table->string('tel', 24)->comment('电话');
            $table->string('prov', 16)->comment('省');
            $table->string('city', 16)->comment('市');
            $table->string('dist', 16)->comment('区');
            $table->string('address')->comment('地址');
            $table->string('remark')->comment('备注');
            $table->string('status', 16)->comment('状态');
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
        Schema::dropIfExists('suppliers');
    }
}
