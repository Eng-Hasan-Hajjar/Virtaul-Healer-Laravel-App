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
        Schema::create('questions_hearts', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->enum('answer_type', ['YesNo', 'Text']); // نوع الإجابة

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions_hearts');
    }
};
