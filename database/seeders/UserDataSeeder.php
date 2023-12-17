<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use faker\factory as faker;

class UserDataSeeder extends Seeder
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
                'email' => $faker->safeEmail,
                'password' => Hash::make('password'),
                'rememberToken' => Str::random(10),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'nim' => (string)rand(1000000000, 2540117565),
                'email' => $faker->safeEmail,
                'password' => Hash::make('password'),
                'rememberToken' => Str::random(10),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'nim' => (string)rand(1000000000, 2540117565),
                'email' => $faker->safeEmail,
                'password' => Hash::make('password'),
                'rememberToken' => Str::random(10),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'nim' => (string)rand(1000000000, 2540117565),
                'email' => $faker->safeEmail,
                'password' => Hash::make('password'),
                'rememberToken' => Str::random(10),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'nim' => (string)rand(1000000000, 2540117565),
                'email' => $faker->safeEmail,
                'password' => Hash::make('password'),
                'rememberToken' => Str::random(10),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]
        ],
        
    );
    }
}
