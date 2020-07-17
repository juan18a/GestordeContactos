<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->double('presupuesto_min');
            $table->double('presupuesto_max');
            $table->unsignedInteger('id_servicio');
            $table->unsignedInteger('id_mediopago');
            $table->text('requerimiento');
            $table->unsignedInteger('puntuación')->nullable();
            $table->unsignedInteger('id_cliente')->nullable();
            $table->unsignedInteger('id_agente')->nullable();
            $table->boolean('email_verified')->nullable();
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
        Schema::dropIfExists('contactos');
    }
}
