<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('instructor');
            $table->string('duration');
            $table->enum('level', ['Beginner', 'Intermediate', 'Advanced']);
            $table->integer('students')->default(0);
            $table->decimal('rating', 2, 1)->default(0.0);
            $table->string('video_url')->nullable();
            $table->json('topics'); // Store topics as JSON array
            $table->decimal('price', 8, 2)->default(0.00);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
