<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('items', function ($table) {
      $table->increments('id');
      $table->string('name');
      $table->integer('price');
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
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('items');
  }

}
