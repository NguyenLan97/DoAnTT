<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->increments('bill_id');
            $table->integer('bill_userid')->unsigned();
            $table->string('bill_fullname');
            $table->string('bill_phone')->nullable();
            $table->string('bill_address')->nullable();
            $table->double('bill_price')->default(0);
            $table->integer('bill_status')->default(0);
            $table->foreign('bill_userid')
                ->references('id')
                ->on('users')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');
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
        Schema::dropIfExists('bill');
    }
}
