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
        
            Schema::create('places', function (Blueprint $table) {
                $table->id();
                $table->string('coverpicture');
                $table->string('profilepicture');
                $table->string('stadiumname');
                $table->string('stadiumlocation');
                $table->string('stadiumcapacity');
                $table->string('stadiumdescription');
                $table->string('topmomenttext1');
                $table->string('topmomentpicture1');
                $table->string('topmomenttext2');
                $table->string('topmomentpicture2');
                $table->string('topmomenttext3');
                $table->string('topmomentpicture3');
                $table->string('topmomenttext4');
                $table->string('topmomentpicture4');
                $table->string('feautretext');
                $table->string('featuredescription');
                $table->string('featurepicture');
                $table->timestamps();
            });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
