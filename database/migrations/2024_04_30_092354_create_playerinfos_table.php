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
        Schema::create('playerinfos', function (Blueprint $table) {
        $table->id();
        $table->string('image');
        $table->string('full_name');
        $table->date('birth_date');
        $table->string('batting_style')->nullable(); // nullable because it's optional in the form
        $table->string('bowling_style')->nullable(); // nullable because it's optional in the form
        $table->string('playing_role');
        $table->string('country');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playerinfos');
    }
};
