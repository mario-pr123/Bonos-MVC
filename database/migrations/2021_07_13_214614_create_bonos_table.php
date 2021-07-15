<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonos', function (Blueprint $table) {
            $table->id('id_bonos');
            $table->string('motivo');
            $table->decimal('valor_bono');
            $table->date('fecha_bono');
            $table->unsignedBigInteger('usuario_id_usuario')->nullable();
            $table->foreign('usuario_id_usuario')->references('id_usuario')->on('usuarios')->onDelete('CASCADE');
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
        Schema::dropIfExists('bonos');
    }
}
