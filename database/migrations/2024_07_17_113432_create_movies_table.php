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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title', 120);
            $table->string('director', 120)->nullable();
            $table->string('protagonist', 255)->nullable();
            $table->integer('duration');
            $table->text('synopsis')->nullable();
            $table->datetime('release');
            $table->string('poster', 255)->nullable();
            $table->string('genre', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
