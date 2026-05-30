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
        Schema::create('companies', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Public unique identifier
            $table->uuid('uuid')->unique();

            // Company name
            $table->string('name');

            // SEO friendly URL
            $table->string('slug')->unique();

            // Optional company website
            $table->string('website')->nullable();

            // Optional location
            $table->string('location')->nullable();

            // Small company description
            $table->text('description')->nullable();

            // Laravel timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
