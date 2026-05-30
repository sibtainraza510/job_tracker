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
        Schema::create('interviews', function (Blueprint $table) {
          $table->id();

    $table->foreignId('job_application_id')
        ->constrained()
        ->cascadeOnDelete();

    $table->string('round_name');

    $table->dateTime('interview_at');

    $table->string('mode')->nullable();

    $table->string('meeting_link')->nullable();

    $table->text('feedback')->nullable();

    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interviews');
    }
};
