<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('work_id',32)->comment('交接编号');
            $table->integer('cash')->comment('应收现金');
            $table->integer('total_money')->comment('总销售额');
            $table->integer('order_count')->comment('订单笔数');
            $table->dateTime('work_start_time')->comment('工作开始时间：当天第一次登录时间');
            $table->dateTime('work_end_time')->comment('交班时间');
            $table->integer('sku_count')->comment('sku种数');
            $table->integer('sale_count')->comment('商品总数');
            $table->integer('way_cash_count')->comment('现金次数');
            $table->integer('weixin_pay_count')->comment('微信支付次数');
            $table->integer('ali_pay_count')->comment('支付宝支付次数');
            $table->integer('union_pay_count')->comment('银联支付次数');

            $table->string('com_id', 32)->comment('公司编码');
            $table->string('sh_id', 32)->comment('店铺编码');
            $table->string('user_id', 32)->comment('用户uuid');
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
        Schema::dropIfExists('work_reports');
    }
}
