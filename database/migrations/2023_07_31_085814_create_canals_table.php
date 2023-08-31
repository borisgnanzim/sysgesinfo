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
        Schema::create('canals', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->unsignedBigInteger('agence_id')->nullable();
            $table->unsignedBigInteger('departement_id')->nullable();
            $table->foreign('agence_id')->references('id')->on('agences')->onDelete('cascade');
            $table->foreign('departement_id')->references('id')->on('departements')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('canals');
    }
};
