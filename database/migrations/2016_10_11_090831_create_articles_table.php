<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id');
            $table->string('title')->index();
            $table->text('original_content')->nullable();
            $table->string('short_content')->nullable();
            $table->integer('article_count')->default(0);
            $table->integer('favorite_count')->default(0);
            $table->integer('view_count')->default(0);
            $table->enum('is_disabled', ['yes', 'no'])->default('no');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
