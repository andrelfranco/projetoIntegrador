<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco', function (Blueprint $table) {
            $table->increments('id');
            $table->string('endereco');
            $table->string('numero_endereco');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('cep');
            $table->string('uf');
            $table->string('latitude');
            $table->string('longitude');

            $table->integer('cooperativa_id')->unsigned();
            $table->foreign('cooperativa_id')
                ->references('id')->on('cooperativas')
                ->onDelete('cascade');

            $table->integer('produtor_id')->unsigned();
            $table->foreign('produtor_id')
                ->references('id')->on('produtores')
                ->onDelete('cascade');
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
        Schema::dropIfExists('produtores');
    }
}
