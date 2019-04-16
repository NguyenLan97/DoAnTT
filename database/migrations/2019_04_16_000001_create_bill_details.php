<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_details', function (Blueprint $table) {
            $table->integer('bill_id')->unsigned();
            $table->integer('prod_id')->unsigned();
            $table->double('prod_price');
            $table->integer('prod_quantity');
            $table->foreign('prod_id')
                ->references('prod_id')
                ->on('product')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');
            $table->foreign('bill_id')
                ->references('bill_id')
                ->on('bill')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_details');
    }
}
