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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('studio');
            $table->string('image')->nullable();
            $table->date('date')->index();
            $table->string('day', 10); // Jika hanya menyimpan nama hari (Senin, Selasa, etc.)
            $table->time('time_start')->nullable();
            $table->time('time_end')->nullable();
            $table->boolean('live')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
