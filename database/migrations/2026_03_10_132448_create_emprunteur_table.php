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
        Schema::create('emprunteur', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable(false)->comment('Nom de l\'emprunteur');
            $table->string('telephone', 100)->unique()->nullable(false)->comment('Numéro de téléphone de l\'emprunteur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprunteur');
    }
};
