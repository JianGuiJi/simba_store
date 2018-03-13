<?php

//use Illuminate\Support\Facades\Schema;
use Jialeo\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSkuShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sku_shop', function (Blueprint $table) {
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string('name', 50)->comment('商品名称');
            $table->string('sku_num', 64)->comment('SKU编码');
            $table->string('sku_id', 64)->comment('skuID');

            $table->string('spec_name', 20)->comment('规格');
            $table->bigInteger('sale_price')->comment('售价');
            $table->bigInteger('vip_price')->comment('会员价');

            $table->bigInteger('min_price')->comment('成本');
            
            $table->string('status',16)->comment('状态');
            $table->string('company_id', 32)->comment('公司id');
            $table->string('shop_id', 32)->comment('店铺id');
            
            $table->dateTime('created_time')->comment('创建时间');
            $table->dateTime('updated_time')->comment('修改时间');
            $table->comment = '店铺SKU表';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_sku_shops');
    }
}
