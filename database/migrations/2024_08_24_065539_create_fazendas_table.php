<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fazendas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('uf');
            $table->string('cidade');
            $table->text('localizacao');
            $table->decimal('preco', 18, 2);
            $table->string('hectares');
            $table->text('descricao');
            $table->string('km_estrada_chao')->nullable();
            $table->string('melhor_plantaçao')->nullable();
            $table->integer('destaque')->nullable();
            $table->integer('status');
            $table->integer('riacho');
            $table->foreignId('empresa_id')->nullable()->constrained();
            $table->timestamps();
        });
    }

    // -fazenda
    // nome
    // localizacao,

    // preço
    // hectares
    // descrição
    // riacho
    // km de estrada de chão
    // melhor plantação
    // galeria de imagens
    // destaque
    // status
    // empresa_id

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fazendas');
    }
};
