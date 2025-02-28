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
        Schema::create('exams', function (Blueprint $table) {
            $table->id('exam_id'); // Explicitly naming the primary key
            $table->string('name', 45);
            $table->date('start_date');

            // Define exam_type_id and correctly reference the renamed primary key in exam_types
            $table->unsignedBigInteger('exam_type_id');
            $table->foreign('exam_type_id')->references('exam_type_id')->on('exam_types')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};