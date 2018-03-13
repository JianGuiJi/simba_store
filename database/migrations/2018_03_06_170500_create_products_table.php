<?php

//use Illuminate\Support\Facades\Schema;
use Jialeo\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     * 商品表-SKU表 用 barcode
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('id', 32)->comment('uuid');
            $table->primary('id');
            $table->string('barcode', 64)->comment('商品条码');
            $table->string('brand_id', 64)->comment('品牌ID');
            $table->string('category_id', 64)->comment('类目ID');
            $table->bigInteger('shoppe_price')->comment('专柜价');
            $table->bigInteger('brd_price')->comment('品牌方控价');
            $table->dateTime('ttm')->comment('上市时间');
            $table->string('prd_area', 32)->comment('产地');
            $table->string('prd_epr', 32)->comment('生产企业');
            $table->string('prd_attr', 32)->comment('生产属性');
            $table->string('exec_std', 32)->comment('执行标准');
            $table->string('grade', 32)->comment('档次');
            $table->string('sample', 32)->comment('中小样');
            $table->bigInteger('weight')->comment('重量(g)');
            $table->bigInteger('net_weight')->comment('净量(g)');
            $table->string('color_no', 16)->comment('色号');
            $table->bigInteger('volume')->comment('体积：立方厘米');
            $table->bigInteger('capacity')->comment('容量：毫升');
            $table->string('texture', 32)->comment('质地');
            $table->string('carton', 32)->comment('箱规');
            $table->string('packing', 32)->comment('包装');
            $table->string('basis', 32)->comment('主要成分');
            $table->string('fit_age', 32)->comment('适合年龄');
            $table->string('fit_skin', 32)->comment('适合肤质');
            $table->string('efficacy', 32)->comment('功效');
            $table->string('usage_method', 32)->comment('使用方法');
            $table->string('qgp', 16)->comment('保质期：Quality guarantee period');

            $table->string('company_id', 32)->comment('公司id');
            $table->string('user_id', 32)->comment('用户id');

            $table->dateTime('created_time')->comment('创建时间');
            $table->dateTime('updated_time')->comment('修改时间');
            $table->comment = '商品表';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
