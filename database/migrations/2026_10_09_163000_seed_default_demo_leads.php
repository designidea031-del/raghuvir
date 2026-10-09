<?php

use Database\Seeders\LeadSeeder;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        LeadSeeder::seedDemoLeads();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Keep customer leads safe
    }
};
