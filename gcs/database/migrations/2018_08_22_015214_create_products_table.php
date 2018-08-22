<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description',120);
            $table->string('serial_number',50);
            $table->date('final_date');
            $table->unsignedInteger('status');
            $table->unsignedInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->unsignedInteger('brands_id');
            $table->foreign('brands_id')->references('id')->on('brands');
            $table->unsignedInteger('bills_id');
            $table->foreign('bills_id')->references('id')->on('bills');
            $table->unsignedInteger('enterprises_id');
            $table->foreign('enterprises_id')->references('id')->on('enterprises');
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
        Schema::dropIfExists('products');
    }
}
