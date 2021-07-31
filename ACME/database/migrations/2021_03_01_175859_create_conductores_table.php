<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateconductoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('numeroCedula');
            $table->text('primerNombre');
            $table->text('segundoNombre')->nullable();
            $table->text('apellidos');
            $table->string('direccion', 45);
            $table->string('telefono', 45);
            $table->string('ciudad', 45);


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
        Schema::dropIfExists('conductores');
    }
}
