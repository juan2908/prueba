<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('placa',6);
            $table->text('color');
            $table->string('Marca',10);
            $table->enum('tipo_de_veiculo',['particular','publico']);

            $table->bigInteger('primerNombre')->unsigned();
            $table->bigInteger('primer_Nombre')->unsigned();


            $table->foreign('primerNombre')->references('id')->on('conductores');
            $table->foreign('primer_Nombre')->references('id')->on('propietarios');

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
        Schema::dropIfExists('vehiculos');
    }
}
