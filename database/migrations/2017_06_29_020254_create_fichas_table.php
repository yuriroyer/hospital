<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->string('nome', 120);
            $table->string('registro', 50);
            $table->text('diagnostico_inicial');
            $table->string('data_admissao', 10);
            $table->string('sexo', 1);
            $table->integer('idade');
            $table->string('leito', 15);
            $table->string('condicao_risco');
            $table->string('terminologia');
            $table->string('data');
            $table->string('inicio', 100);
            $table->string('fim', 100);
            $table->string('ducacao');
            $table->string('classificacao');
            $table->string('emergencia');
            $table->string('motivo'); /* --> */
            $table->string('tricotomia', 1);
            $table->string('tricotomia_data_hora');
            $table->string('transfusao_sanguinea', 1);
            $table->string('cirurgiao');
            $table->string('instrumentador');
            $table->string('anestesista');
            $table->string('auxiliar_cirurgia');
            $table->text('cirtulantes');
            $table->string('anestesia');
            $table->string('antimicrobiano');
            $table->timestamps();
        });

        Schema::table('fichas', function($table) {
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fichas');
    }
}
