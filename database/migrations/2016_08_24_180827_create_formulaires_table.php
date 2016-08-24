<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',100);
            $table->string('prenom',100)->nullable();
            $table->string('telephone',100);
            $table->string('adresse',100)->nullable();
            $table->string('ville',100)->nullable();
            $table->string('codepostal',50)->nullable();
            $table->string('pays',100)->nullable();
            $table->string('mail',100);
            $table->string('texte',100);

            $table->enum('type', ['formation', 'entreprise', 'contact'])->default('formation');
            $table->enum('formation_type', ['formation_longue', 'formation_courte', 'formation_module', 'formation_presentiel', 'autre'])->default('formation_longue');


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
        Schema::drop('formulaires');
    }
}
