<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('prod_id');
            $table->string('prod_name');
            $table->string('prod_slug');
            $table->double('prod_price');
            $table->double('prod_price_promotion');
            $table->string('prod_img');
            $table->string('prod_warranty');
            $table->string('prod_material');
            $table->string('prod_capacity');
            $table->string('prod_producer');
            $table->string('prod_cap_type');
            $table->string('prod_pot_type');
            $table->tinyInteger('prod_status');
            $table->text('prod_description');
            $table->tinyInteger('prod_featured');
            $table->tinyInteger('prod_new');
            $table->integer('prod_cate')->unsigned();
            $table->foreign('prod_cate')
            	  ->references('cate_id')
            	  ->on('category')
            	  ->onDelete('cascade');
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
        Schema::dropIfExists('product');
    }
}
