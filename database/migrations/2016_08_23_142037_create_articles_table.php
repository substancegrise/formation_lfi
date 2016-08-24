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
            $table->string('titre', 100);
            $table->text('description',255)->nullable();
            $table->text('content');
            $table->string('adresse',100)->nullable();
            $table->dateTime('date_event');

            $table->enum('status', ['published', 'unpublished'])->default('unpublished');

            $table->unsignedInteger('media_id');
            $table->foreign('media_id')
                ->references('id')
                ->on('medias')
                ->onDelete('CASCADE');

            $table->unsignedInteger('article_categorie_id')->nullable();
            $table->foreign('article_categorie_id')
                ->references('id')
                ->on('articles_categories')
                ->onDelete('SET NULL');

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
        Schema::drop('articles');
    }

}
