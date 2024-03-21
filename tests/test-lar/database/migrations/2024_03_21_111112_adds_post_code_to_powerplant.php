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
        Schema::table('power_plants', function (Blueprint $table) {
            $table->foreignId('postcode_nr')->reference('postcode')->on('4pp')->contrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('power_plants', function (Blueprint $table) {
            $table->dropForeign('postcode_nr');

        });
    }
};
