<?php

//use Illuminate\Support\Facades\Schema;
use Jialeo\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_order_detail', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string("check_order_id", 64)->comment('盘点单id');
            $table->string("check_num", 32)->comment('盘点单单号');

            $table->string('sku_id', 64)->comment('SKU ID');
            $table->string('sku_name', 50)->comment('商品名称');
            $table->string('spec_name', 20)->comment('规格');
            $table->string('unit', 8)->comment('单位');
            $table->integer('num_pre')->comment('系统数量（盘点前该店铺该SKU的数量）');
            $table->integer('num')->comment('盘点数量');
            $table->string('company_id', 32)->comment('公司id');
            $table->string('user_id',32)->comment('用户uuid');
            $table->string('status',16)->comment('状态');

            $table->dateTime('created_time')->comment('创建时间');
            $table->dateTime('updated_time')->comment('修改时间');
            $table->comment = '盘点单明细表';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('check_order_items');
    }
}
