<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormationsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre',50);
            $table->unsignedInteger('formation_id');
            $table->timestamps();

            $table->foreign('formation_id')
                ->references('id')
                ->on('formations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('formations_types');
    }
}
