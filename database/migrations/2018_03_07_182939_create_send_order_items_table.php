<?php

//use Illuminate\Support\Facades\Schema;
use Jialeo\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     * 配货单操作日志
     * @return void
     */
    public function up()
    {
        Schema::create('send_order_detail', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string("send_order_id", 64)->comment('配货单id');
            $table->string("send_num", 64)->comment('配货单号');

            $table->string('product_id', 64)->comment('商品id');
            $table->string('sku_id', 64)->comment('SKU ID');
            $table->string('sku_name', 50)->comment('商品名称');
            $table->string('spec_name', 20)->comment('规格');
            $table->string('unit', 8)->comment('单位');
//            $table->dateTime('expire_time')->comment('商品过期时间');
            $table->integer('num')->comment('出库数量');
            $table->string('status',16)->comment('状态');

            $table->string('company_id', 32)->comment('公司编码');
            $table->string('user_id', 32)->comment('用户uuid');

            $table->dateTime('created_time')->comment('创建时间');
            $table->dateTime('updated_time')->comment('修改时间');
            $table->comment = '配货发货单明细';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('send_order_items');
    }
}
