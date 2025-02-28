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
        Schema::create('classroom_students', function (Blueprint $table) {
        $table->foreign('classroom_id')->references('classroom_id')->on('classrooms',);
        $table->foreign('student_id')->references('student_id')->on('students',);
        $table->unsignedBigInteger('classroom_id');
        $table->unsignedBigInteger('student_id');
        $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classroom_students');
    }
};
