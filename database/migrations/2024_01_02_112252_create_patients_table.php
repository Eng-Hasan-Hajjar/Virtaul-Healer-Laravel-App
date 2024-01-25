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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            $table->integer('age')->default('18')->nullable();
            $table->string('gender')->default('male')->nullable();
            $table->string('blood_type')->default('o+')->nullable();
            $table->string('genetic_disease')->default('')->nullable();
            $table->string('chronic_diseases')->default('')->nullable();
            $table->string('previous_surgery')->default('')->nullable();
            $table->integer('number')->unique()->nullable();
            $table->string('address')->default('Aleppo')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            // تعيين ترتيب الحقول
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
