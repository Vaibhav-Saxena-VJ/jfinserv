<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
          $table->increments('blog_id');
          $table->string('blog_title');
          $table->string('url');
          $table->longtext('blog_description');
          $table->string('image');
          $table->string('seo_title')->nullable();
          $table->string('keywords')->nullable();
          $table->longtext('description')->nullable();
          $table->integer('is_deleted')->default(0);
          $table->integer('view_count')->default(100);
          $table->integer('blog_type_id')->unsigned();
          $table->foreign('blog_type_id')->references('blog_type_id')->on('blog_types');
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
        Schema::dropIfExists('blogs');
    }
}
