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
            $table->string('question_code',5);
            $table->foreign('question_code')->references('code')->on('questions')->onDelete('cascade');
            $table->string('note')->nullable()->default(null);
            $table->timestamp('active_from')->nullable(false);
            $table->timestamp('active_to')->nullable();
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
