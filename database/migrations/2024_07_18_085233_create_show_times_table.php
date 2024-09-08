<?php

use App\Models\Movie;
use App\Models\Theater;
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
        Schema::create('show_times', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Movie::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Theater::class)->constrained()->cascadeOnDelete();
            $table->enum('show_hour', ['13:00', '16:00', '20:00', '23:00']);
            $table->string('show_day');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('show_times');
    }
};
