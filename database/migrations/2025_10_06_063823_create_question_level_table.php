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
        Schema::create('question_level', function (Blueprint $table) {
            $table->id('levelquestion_id');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('stage_id');
            $table->foreign('question_id')-> references('question_id')-> on('questions')-> onDelete('cascade');
            $table->foreign('stage_id')-> references('stage_id')-> on('stages')-> onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_level');
    }
};
