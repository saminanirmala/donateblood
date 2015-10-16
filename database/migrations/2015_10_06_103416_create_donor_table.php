<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tbl_donor', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('address');
      $table->enum('gender', ['male', 'female', 'other']);
      $table->date('dob');
      $table->string('contact');
      $table->string('ward_number');
      $table->string('email');
      $table->string('password');
      $table->string('blood_type');
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
    Schema::drop('tbl_donor');
  }
}
