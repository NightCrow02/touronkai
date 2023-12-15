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
        Schema::create('group_datas', function (Blueprint $table) {
            $table->increment('groupId');
            $table->string('groupName');
            $table->string('groupProfilePict');
            $table->string('groupDesc');
            $table->timestamps();
        });

        Schema::create('group_members', function (Blueprint $table){
            $table->increments('groupId');
            $table->integer('username')->unsigned();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::create('group_comments', function (Blueprint $table){
            $table->increments('groupId');
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
        Schema::dropIfExists('group_datas');
        Schema::dropIfExists('group_members');
        Schema::dropIfExists('group_comments');
    }
};
