<?php

//use Illuminate\Support\Facades\Schema;
use Jialeo\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->comment('column comment');
            $table->integer('int')->default(1)->length(1);
            $table->bigInteger('big')->default(1)->length(1);
            $table->smallInteger('small')->default(1)->length(1);
            $table->tinyInteger('tiny')->default(1)->length(1);
            $table->mediumInteger('medium')->default(1)->length(1);

            $table->comment = 'Test';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
