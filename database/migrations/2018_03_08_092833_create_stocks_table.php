<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string('name', 50)->comment('商品名称');
            $table->string('sku', 64)->comment('SKU编码');
            $table->string('barcode', 64)->comment('商品条码');
            $table->string('spec_name', 20)->comment('规格');
            $table->string('plank', 8)->comment('挡板');
            $table->integer('qty')->comment('库存');

            $table->string('com_id', 32)->comment('公司id');
            $table->string('sh_id', 32)->comment('店铺id');
//            $table->string('user_id',32)->comment('用户id');

            $table->dateTime('created_time')->comment('创建时间');
            $table->dateTime('updated_time')->comment('修改时间');
//            $table->dateTime('deleted_time')->comment('删除时间')->nullable();
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
        Schema::dropIfExists('stocks');
    }
}
