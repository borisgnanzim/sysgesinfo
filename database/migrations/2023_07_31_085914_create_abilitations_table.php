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
        Schema::create('abilitations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('canal_id');
            $table->unsignedBigInteger('employe_id');
            $table->string('permission');
            $table->foreign('canal_id')->references('id')->on('canals')->onDelete('cascade');
            $table->foreign('employe_id')->references('id')->on('employes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abilitations');
    }
};
