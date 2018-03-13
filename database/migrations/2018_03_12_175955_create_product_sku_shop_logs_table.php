<?php

//use Illuminate\Support\Facades\Schema;
use Jialeo\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSkuShopLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sku_shop_logs', function (Blueprint $table) {
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string("product_sku_shop_id", 64)->comment('店铺skuId');
            $table->string('status', 16)->comment('状态');
            $table->string('content')->comment('日志内容');
            $table->string('company_id', 32)->comment('公司id');
            $table->string('shop_id', 32)->comment('店铺id');
            $table->string('user_id',32)->comment('用户id');

            $table->dateTime('created_time')->comment('创建时间');
            $table->dateTime('updated_time')->comment('修改时间');
            $table->comment = '店铺SKU 日志表';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_sku_shop_logs');
    }
}
