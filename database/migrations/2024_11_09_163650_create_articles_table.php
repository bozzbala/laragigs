<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('category_id')->nullable();
            $table->timestamps();
            $table->string("title")->nullable();
            $table->text("description")->nullable();
            $table->longText("content")->nullable();
            $table->string("tags")->nullable();
            $table->string("static_url");
            $table->json("image")->nullable();
            $table->boolean("is_published")->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
