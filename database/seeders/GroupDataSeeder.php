<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use faker\factory as faker;

class GroupDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();
        DB::table('group_datas')->insert([
            [
                'groupName' => Str::random(10),
                'groupProfilePict' => 'https://picsum.photos/750/750',
                'groupDesc' => $faker->groupDesc,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]
        ],
    );
        $faker = faker::create();
        DB::table('group_members')->insert([
            [
                'username' => Str::random(10),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]
        ],
    );
        $faker = faker::create();
        DB::table('group_comments')->insert([
            [
                'username' => Str::random(10),
                'body' => Str::random(100),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]
        ]
    );
    }
}
