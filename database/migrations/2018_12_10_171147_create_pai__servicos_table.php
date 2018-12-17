<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaiServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pais_servicos', function (Blueprint $table) {
            

            $table->integer('id_pai')->unsigned();
            $table->foreign('id_pai')->references('id')->on('pais');

            $table->integer('id_servico')->unsigned();
            $table->foreign('id_servico')->references('id')->on('servicos');

            $table->primary(['id_pai', 'id_servico']);


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
        Schema::dropIfExists('pais_servicos');
    }
}
