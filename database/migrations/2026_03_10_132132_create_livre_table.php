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
        Schema::create('livre', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200)->nullable(false)->comment('Titre du livre');
            $table->longText('description')->nullable(true)->comment('Description du livre');
            $table->string('isbn', 20)->unique()->nullable(false)->comment('ISBN du livre');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('auteur')->nullable(false)->comment('Auteur du livre');
            $table->foreignId('category_id')->nullable(false)->comment('ID de la catégorie du livre')->constrained('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livre');
    }
};
