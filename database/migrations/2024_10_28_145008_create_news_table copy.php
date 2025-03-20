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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('capa_image')->nullable();
            $table->json('imanges_opcional')->nullable();
            $table->text('conteudo');
            $table->date('date')->nullable();
            $table->string('autor')->nullable();
            $table->string('resumo')->nullable();
            $table->boolean('estado')->default(1);
            $table->string('slug')->unique(); // Adiciona a coluna "slug"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
