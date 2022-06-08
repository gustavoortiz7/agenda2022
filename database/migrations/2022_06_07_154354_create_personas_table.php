<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',40);
            $table->string('apellido',40);
            $table->string('ci',12)->unique();
            $table->string('direccion',100);
            $table->string('telefono',30);
            $table->string('email',100)->unique();
            $table->unsignedBigInteger('profesion_id');
            $table->string('fotografia',100);
            $table->timestamps();
            $table->foreign('profesion_id')->references('id')->on('profesiones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
