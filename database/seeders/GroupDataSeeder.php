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
                'groupName' => $faker->groupName,
                'groupProfilePict' => '',
                'groupDesc' => $faker->groupDesc,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]
        ],
    );
        $faker = faker::create();
            DB::table('group_members')->insert([
                [
                    'username' => $faker->groupName,
                    'parent_id' => '',
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                ]
            ],
        );
    }
}
