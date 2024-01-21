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
        Schema::create('diagnose_doctor_tabe', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('diagnose_id');
            $table->unsignedBiginteger('doctor_id');
            
            $table->foreign('diagnose_id')->references('id')
                    ->on('diagnoses')->onDelete('cascade');
            $table->foreign('doctor_id')->references('id')
                   ->on('doctors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnose_doctor_tabe');
    }
};
