<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatedLojasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('lojas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_fantasia', 255);
            $table->string('cnpj', 25)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('telefone', 20)->nullable();
            $table->string('endereco', 255)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->string('estado', 20)->nullable();
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
        //
    }
}
