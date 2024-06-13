<?php

use App\Enums\StatusAgendaEnum;
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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id('id')->primary();
            $table->date('data_inicio');
            $table->date('data_prazo');
            $table->date('data_conclusao');
            $table->string('titulo');
            $table->string('descricao');
            $table->enum('status', StatusAgendaEnum::getAll());
            $table->integer('tipo');

            $table->foreign('tipo')->references('id')->on('agendas_tipos')->restrictOnDelete();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
