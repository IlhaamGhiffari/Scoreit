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
        Schema::create('futsals', function (Blueprint $table) {
            $table->id();
            $table->string('home');
            $table->string('away');
            $table->integer('score1');
            $table->integer('babak');
            $table->integer('score2');
            $table->string('note');
            $table->timestamps();
        });
        Schema::table('futsals', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('futsals');
    }
};
