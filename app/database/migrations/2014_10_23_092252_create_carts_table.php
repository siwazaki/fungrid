<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('carts', function ($table) {
      $table->increments('id');
      $table->integer('user_id')->unsigned()->nullable();
      $table->string('foo1', 1000)->nullable();
      $table->string('foo2', 1000)->nullable();
      $table->string('foo3', 1000)->nullable();
      $table->string('foo4', 1000)->nullable();
      $table->string('foo5', 1000)->nullable();
      $table->string('foo6', 1000)->nullable();
      $table->string('foo7', 1000)->nullable();
      $table->string('foo8', 1000)->nullable();
      $table->string('foo9', 1000)->nullable();
      $table->string('foo10', 1000)->nullable();
      $table->string('foo11', 1000)->nullable();
      $table->string('foo12', 1000)->nullable();
      $table->string('foo13', 1000)->nullable();
      $table->string('foo14', 1000)->nullable();
      $table->string('foo15', 1000)->nullable();
      $table->string('foo16', 1000)->nullable();
      $table->string('foo17', 1000)->nullable();
      $table->string('foo18', 1000)->nullable();
      $table->string('foo19', 1000)->nullable();
      $table->string('foo20', 1000)->nullable();
      $table->timestamps();

      $table->foreign('user_id')->references('id')->on('users');

    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('carts');
  }

}
