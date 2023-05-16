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
        Schema::create('volis', function (Blueprint $table) {
            $table->id();
            $table->string('home');
            $table->string('away');
            $table->integer('score1');
            $table->integer('set1');
            $table->integer('score2');
            $table->integer('set2');
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volis');
        
    }
};
