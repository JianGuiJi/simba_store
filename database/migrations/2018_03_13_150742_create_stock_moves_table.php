<?php

//use Illuminate\Support\Facades\Schema;
use Jialeo\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockMovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_way', function (Blueprint $table) {
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string('name', 50)->comment('商品名称');
            $table->string('sku_num', 64)->comment('SKU编码');
            $table->string('sku_id', 64)->comment('skuID');
            $table->string('spec_name', 20)->comment('规格');
            $table->bigInteger('qty_in_way')->comment('内部在途库存');
            $table->bigInteger('qty_out_way')->comment('外部在途库存');

            $table->string('status',16)->comment('状态');
            $table->string('company_id', 32)->comment('公司id');
            $table->string('shop_id', 32)->comment('店铺id');

            $table->dateTime('created_time')->comment('创建时间');
            $table->dateTime('updated_time')->comment('修改时间');
            $table->comment = '商品在途库存表';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_way');
    }
}
