<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('biblioteca_libro', function (Blueprint $table) {
            $table->foreignId('biblioteca_id')->constrained('bibliotecas')->onDelete('cascade');
            $table->foreignId('libro_id')->constrained('libros')->onDelete('cascade');
            $table->primary(['biblioteca_id', 'libro_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('biblioteca_libro');
    }
};
