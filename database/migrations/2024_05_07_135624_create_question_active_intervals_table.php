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
        Schema::create('question_active_intervals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_code')->constrained('questions');
            $table->timestamp('active_from');
            $table->timestamp('active_to');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_active_intervals');
    }
};
