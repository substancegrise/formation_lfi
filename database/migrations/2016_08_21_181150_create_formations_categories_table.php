<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormationsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre',50);
            $table->string('description');
            $table->unsignedInteger('formation_type_id');
            $table->timestamps();

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
        Schema::drop('formations_categories');
    }
}
