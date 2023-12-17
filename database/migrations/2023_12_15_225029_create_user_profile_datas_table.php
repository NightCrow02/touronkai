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
        Schema::create('user_profile_data', function (Blueprint $table) {
            $table->id('profileId');
            $table->string('username')->unique();
            $table->string('profile_picture');
            $table->string('fullName');
            $table->boolean('gender');
            $table->string('division');
            $table->string('generation');
            $table->string('bio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profile_data');
    }
};
