<?php

//use Illuminate\Support\Facades\Schema;
use Jialeo\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendOrdersTable extends Migration
{
    /**
     * Run the migrations.
     * 发货单/配货单
     * @return void
     */
    public function up()
    {
        Schema::create('send_order', function (Blueprint $table) {
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string("send_num", 64)->comment('配货单号');
            $table->string('shop_from', 32)->comment('来源店铺ID');
            $table->string('shop_to', 32)->comment('入库店铺ID');
            $table->string('status', 16)->comment('状态');
            $table->integer('prt_count')->comment('打印次数')->nullable();
            $table->dateTime('left_time')->comment('出库时间');
            $table->string('company_id', 32)->comment('公司编码');
            $table->string('user_id', 32)->comment('创建人：用户uuid');
            $table->dateTime('created_time')->comment('创建时间');
            $table->dateTime('updated_time')->comment('修改时间');
            $table->comment = '配货发货单';

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('send_orders');
    }
}
