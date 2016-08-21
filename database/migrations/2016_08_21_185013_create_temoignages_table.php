<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemoignagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temoignages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',100);
            $table->string('fonction',100);
            $table->string('titre',100);
            $table->string('texte',100);
            $table->unsignedInteger('media_id');
            $table->string('color',50);

            $table->foreign('media_id')
                ->references('id')
                ->on('medias')
                ->onDelete('CASCADE');

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
        Schema::drop('temoignages');
    }
}
