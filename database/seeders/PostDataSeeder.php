<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use faker\factory as faker;

class PostDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();
        DB::table('user_datas')->insert([
            [
                'nim' => (string)rand(1000000000, 2540117565),
                'forumImg' => 'https://picsum.photos/1366/768',
                'title' => Str::random(10),
                'content' => Str::random(128),
                'like' => (boolean)rand(0, 1),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'nim' => (string)rand(1000000000, 2540117565),
                'forumImg' => 'https://picsum.photos/1366/768',
                'title' => Str::random(10),
                'content' => Str::random(128),
                'like' => (boolean)rand(0, 1),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'nim' => (string)rand(1000000000, 2540117565),
                'forumImg' => 'https://picsum.photos/1366/768',
                'title' => Str::random(10),
                'content' => Str::random(128),
                'like' => (boolean)rand(0, 1),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'nim' => (string)rand(1000000000, 2540117565),
                'forumImg' => 'https://picsum.photos/1366/768',
                'title' => Str::random(10),
                'content' => Str::random(128),
                'like' => (boolean)rand(0, 1),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'nim' => (string)rand(1000000000, 2540117565),
                'forumImg' => 'https://picsum.photos/1366/768',
                'title' => Str::random(10),
                'content' => Str::random(128),
                'like' => (boolean)rand(0, 1),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]
        ],
        
    );
    }
}
