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
        Schema::table('job_applications', function (Blueprint $table) {
            // Add company_name column
            $table->string('company_name')->nullable()->after('title');
            
            // Make company_id nullable
            $table->foreignId('company_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_applications', function (Blueprint $table) {
            // Remove company_name column
            $table->dropColumn('company_name');
            
            // Revert company_id to not nullable
            $table->foreignId('company_id')->nullable(false)->change();
        });
    }
};
