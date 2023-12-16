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
        DB::table('user_profile_data')->insert([
            [
            'username' => Str::random(10),
            'profile_picture' => '',
            'fullName' => Str::random(10),
            'email' => Str::random(10).'@binus.ac.id',
            'gender' => true,
            'division' => 'CS',
            'generation' => '20',
            'bio' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]
        ]);
    }
}
