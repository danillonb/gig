<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('pai');
            $table->string('mae');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('cep');
            $table->string('uf');
            $table->string('tel1')->nullable();
            $table->string('tel2')->nullable();
            $table->string('cel')->nullable();
            $table->string('email')->nullable();
            $table->date('dtaNascimento');
            $table->string('cpf')->unique();
            $table->string('rg')->unique();
            $table->string('orgaoExp');
            $table->string('igreja');
            $table->date('dtaDesligamento')->nullable();
            $table->string('motivoDesligamento')->nullable();
            $table->date('dtaBatismoAguas')->nullable();
            $table->date('dtaBatismoEs')->nullable();
            $table->string('procedencia')->nullable();
            $table->string('funcaoEclesiastica')->nullable();
            $table->string('funcaoMinisterial')->nullable();
            $table->string('tipoSanguineo');
            $table->string('fatorRh');
            $table->string('naturalidade');
            $table->string('nacionalidade');
            $table->string('estadoCivil');
            $table->string('etinia');
            $table->string('profissao')->nullable();
            $table->string('departamento')->nullable();
            $table->string('destino')->nullable();
            $table->string('sexo');
            $table->text('obs')->nullable();
            $table->string('fotoId')->default('0.png');
            $table->boolean('ativo')->default(true);
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
        Schema::dropIfExists('membros');
    }
}
