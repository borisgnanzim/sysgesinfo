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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();         
            $table->string('titre');
            $table->longText('contenu');
            $table->unsignedBigInteger('employe_id')->nullable();
            $table->string('type');
            $table->unsignedBigInteger('canal_id')->nullable();
            $table->foreign('employe_id')->references('id')->on('employes')->onDelete('cascade');
            $table->foreign('canal_id')->references('id')->on('canals')->onDelete('cascade');
            $table->string('fichier')->nullable();
            $table->timestamps();
        });
    }  

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};

