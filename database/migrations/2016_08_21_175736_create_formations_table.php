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
            $table->string('description', 255);
            $table->date('debut');
            $table->date('fin');
            $table->unsignedInteger('event_id');
            $table->timestamps();


            $table->foreign('event_id')
                ->references('id')
                ->on('events')
                ->onDelete('CASCADE');
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
