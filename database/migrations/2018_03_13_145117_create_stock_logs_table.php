<?php

//use Illuminate\Support\Facades\Schema;
use Jialeo\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockLogsTable extends Migration
{
    /**
     * Run the migrations.
     * 货卡记录
     * @return void
     */
    public function up()
    {
        Schema::create('stock_logs', function (Blueprint $table) {
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string('name', 50)->comment('商品名称');
            $table->string('sku_num', 64)->comment('SKU编码');
            $table->string('sku_id', 64)->comment('skuID');
            $table->string('spec_name', 20)->comment('规格');
            $table->string('plank', 8)->comment('挡板');
            $table->bigInteger('qty_before')->comment('变更前库存');
            $table->bigInteger('qty_after')->comment('变更后库存');
            $table->string('status',16)->comment('状态');

            $table->string('company_id', 32)->comment('公司id');
            $table->string('shop_id', 32)->comment('店铺id');
            $table->string('user_id',32)->comment('用户id');

            $table->dateTime('created_time')->comment('创建时间');
            $table->dateTime('updated_time')->comment('修改时间');
            $table->comment = '库存变更记录';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_logs');
    }
}
