<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tbl_posts', function (Blueprint $table) {
      $table->increments('id');
      $table->text('description');
      $table->enum('status', ['publish', 'unpublish']);
      $table->dateTime('date');
      $table->string('posted_by');
      $table->string('thumbnail_image');
      $table->string('full_image');
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
    Schema::drop('tbl_posts');
  }
}
