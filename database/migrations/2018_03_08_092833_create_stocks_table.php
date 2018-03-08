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
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->comment('商品名称');
            $table->string('sku', 64)->comment('商品条码+规格');
            $table->string('barcode', 64)->comment('商品条码');
            $table->string('spec_name', 20)->comment('规格');
            $table->string('plank', 8)->comment('挡板');
            $table->integer('qty')->comment('库存');

            $table->string('com_id', 32)->comment('公司编码');
            $table->string('shops_id', 32)->comment('店铺ID');
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
        Schema::dropIfExists('stocks');
    }
}
