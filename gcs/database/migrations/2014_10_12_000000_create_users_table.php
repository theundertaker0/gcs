<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('last_name',50);
            $table->string('address',100);
            $table->string('city',50);
            $table->string('state',50);
            $table->string('cp',50);
            $table->string('email',100)->unique();
            $table->string('password');
            $table->unsignedInteger('level');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('bills',function(Blueprint $table){
            $table->increments('id');
            $table->string('folio',50);
            $table->date('date');
            $table->string('picture',100);
        });

        Schema::create('brands',function (Blueprint $table){
            $table->increments('id');
            $table->string('name',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('bills');
        Schema::dropIfExists('brands');
    }
}
