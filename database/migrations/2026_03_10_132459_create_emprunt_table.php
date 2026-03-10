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
        Schema::create('emprunt', function (Blueprint $table) {
            $table->id();
            $table->foreignId('livre_id')->nullable(false)->comment('ID du livre emprunté')->constrained('livre')->onDelete('cascade');
            $table->foreignId('emprunteur_id')->nullable(false)->comment('ID de l\'emprunteur')->constrained('emprunteur')->onDelete('cascade');
            $table->date('date_sorti')->nullable(false)->comment('Date de l\'emprunt');
            $table->date('date_retour')->nullable(true)->comment('Date de retour du livre');
            $table->longText('commentaire')->nullable(false)->comment('Commentaire sur l\'emprunt');
            $table->enum('status', ['en cours', 'retourné'])->default('en cours')->comment('Statut de l\'emprunt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprunt');
    }
};
