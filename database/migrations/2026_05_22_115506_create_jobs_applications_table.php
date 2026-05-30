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
        Schema::create('job_applications', function (Blueprint $table) {
            
         $table->id();

            // Public UUID
            $table->uuid('uuid')->unique();

            /*
            |--------------------------------------------------------------------------
            | Foreign Keys
            |--------------------------------------------------------------------------
            */

            // User relation
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            // Company relation
            $table->foreignId('company_id')
                ->constrained()
                ->cascadeOnDelete();

            // Status relation
            $table->foreignId('job_status_id')
                ->constrained()
                ->cascadeOnDelete();


                 /*
            |--------------------------------------------------------------------------
            | Job Details
            |--------------------------------------------------------------------------
            */

            // Frontend Developer
            $table->string('title');

            // Optional salary
            $table->decimal('salary', 10, 2)->nullable();

            // Apply URL
            $table->string('application_url')->nullable();

            // Applied date
            $table->date('applied_at')->nullable();

            // Remote or not
            $table->boolean('is_remote')->default(false);

            // Optional notes
            $table->text('notes')->nullable();


              /*
            |--------------------------------------------------------------------------
            | Performance Indexes
            |--------------------------------------------------------------------------
            */

            $table->index('uuid');
            $table->index('title');

            /*
            |--------------------------------------------------------------------------
            | Laravel Helpers
            |--------------------------------------------------------------------------
            */

            $table->timestamps();

            $table->softDeletes();

        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
