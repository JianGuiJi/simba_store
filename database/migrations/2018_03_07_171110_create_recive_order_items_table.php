<?php

//use Illuminate\Support\Facades\Schema;
use Jialeo\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReciveOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     * 入库单明细
     * @return void
     */
    public function up()
    {
        Schema::create('receive_order_detail', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string("receive_order_id", 64)->comment('入库单id');
            $table->string("receive_num", 64)->comment('入库单号');
            $table->string('product_id', 64)->comment('商品id');
            $table->string('sku_id', 64)->comment('SKU ID');
            $table->string('sku_name', 50)->comment('商品名称');
            $table->string('spec_name', 20)->comment('规格')->nullable();
            $table->string('unit', 8)->comment('单位')->nullable();
            $table->dateTime('expire_time')->comment('商品过期时间')->nullable();
            $table->integer('pre_count')->comment('预计入库数量')->nullable();
            $table->integer('real_count')->comment('入库数量')->nullable()->defalut(0);
            $table->bigInteger('min_price')->comment('成本')->nullable()->defalut(0);
            $table->string('remark', 255)->comment("备注")->nullable();
            $table->string('company_id', 32)->comment('公司编码');
            $table->dateTime('created_time')->comment('创建时间');
            $table->dateTime('updated_time')->comment('修改时间');
            $table->comment="入库单明细表";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recive_order_items');
    }
}
