<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('favs', function (Blueprint $table) {
            $table->unique(['user_id', 'player_id']);
        });
    }

    public function down()
    {
        Schema::table('favs', function (Blueprint $table) {
            $table->dropUnique(['user_id', 'player_id']);
        });
    }
};
