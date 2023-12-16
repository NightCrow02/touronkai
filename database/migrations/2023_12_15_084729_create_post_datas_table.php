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
        Schema::create('post_datas', function (Blueprint $table) {
            $table->id('forumId')->unique();
            $table->string('nim');
            $table->string('forumImg');
            $table->string('title');
            $table->string('content');
            $table->boolean('like');
            $table->timestamps();
        });

        Schema::create('forum_comment_datas', function (Blueprint $table) {
            $table->id('forumId')->unique();
            $table->string('nim');
            $table->string('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_datas');
        Schema::dropIfExists('forum_comment_datas');
    }
};
