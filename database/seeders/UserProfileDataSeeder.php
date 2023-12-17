<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use faker\factory as faker;

class UserProfileDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();
        DB::table('user_profile_data')->insert([
            [
                'userName' => $faker->name.'.'.$faker->name,
                'profile_picture' => '',
                'fullName' => $faker->name.' '.$faker->name,
                'gender' => (boolean)rand(0, 1),
                'division' => Str::random(12),
                'generation' => (integer)rand(1, 30),
                'bio' => Str::random(128),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'userName' => $faker->name.'.'.$faker->name,
                'profile_picture' => '',
                'fullName' => $faker->name.' '.$faker->name,
                'gender' => (boolean)rand(0, 1),
                'division' => Str::random(12),
                'generation' => (integer)rand(1, 30),
                'bio' => Str::random(128),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'userName' => $faker->name.'.'.$faker->name,
                'profile_picture' => '',
                'fullName' => $faker->name.' '.$faker->name,
                'gender' => (boolean)rand(0, 1),
                'division' => Str::random(12),
                'generation' => (integer)rand(1, 30),
                'bio' => Str::random(128),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'userName' => $faker->name.'.'.$faker->name,
                'profile_picture' => '',
                'fullName' => $faker->name.' '.$faker->name,
                'gender' => (boolean)rand(0, 1),
                'division' => Str::random(12),
                'generation' => (integer)rand(1, 30),
                'bio' => Str::random(128),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'userName' => $faker->name.'.'.$faker->name,
                'profile_picture' => '',
                'fullName' => $faker->name.' '.$faker->name,
                'gender' => (boolean)rand(0, 1),
                'division' => Str::random(12),
                'generation' => (integer)rand(1, 30),
                'bio' => Str::random(128),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            
            
        ]);
    }
}
