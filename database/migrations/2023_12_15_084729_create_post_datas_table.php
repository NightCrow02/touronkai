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
            $table->increment('postId');
            $table->string('username')->unique();
            $table->string('title');
            $table->string('image');
            $table->text('content');
            $table->timestamps();
        });

        Schema::create('post_comments', function (Blueprint $table){
            $table->increments('id');
            $table->integer('username')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_datas');
        Schema::dropIfExists('post_comments');
    }
};
