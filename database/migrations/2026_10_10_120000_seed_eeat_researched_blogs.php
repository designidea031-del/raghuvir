<?php

use Database\Seeders\BlogSeeder;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        BlogSeeder::seedArticles();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Keep blog articles safe
    }
};
