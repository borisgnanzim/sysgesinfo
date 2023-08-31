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
        // Schema::table('enum_in_articles_', function (Blueprint $table) {
        //     //
        // });

        DB::statement("ALTER TABLE articles MODIFY COLUMN type ENUM('Note','Mémo','Rapport','Courrier','Autre')");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('enum_in_articles_', function (Blueprint $table) {
        //     //
        // });

        DB::statement("ALTER TABLE articles MODIFY COLUMN type VARCHAR(255)");
    }
};
