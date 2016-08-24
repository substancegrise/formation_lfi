<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre',100);
            $table->string('presentation');
            $table->date('debut');
            $table->date('fin');

            $table->timestamps();

            $table->unsignedInteger('media_id');
            $table->foreign('media_id')
                ->references('id')
                ->on('medias')
                ->onDelete('CASCADE');

            $table->unsignedInteger('formation_categorie_id');
            $table->foreign('formation_categorie_id')
                ->references('id')
                ->on('formations_categories');

            $table->unsignedInteger('formation_type_id');
            $table->foreign('formation_type_id')
                ->references('id')
                ->on('formations_types');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('formations');
    }
}
