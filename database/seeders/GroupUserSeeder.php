<?php

namespace Database\Seeders;

use App\Models\GroupUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GroupUser::factory()->create([
            'user_id' => 1,
            'group_id' =>1,
            'company_id' =>1,
        ]);
        GroupUser::factory()->create([
            'user_id' => 1,
            'group_id' =>2,
            'company_id' =>1,
        ]);
        GroupUser::factory()->create([
            'user_id' => 2,
            'group_id' =>1,
            'company_id' =>1,
        ]);
        GroupUser::factory()->create([
            'user_id' => 2,
            'group_id' =>2,
            'company_id' =>1,
        ]);
        GroupUser::factory()->create([
            'user_id' => 3,
            'group_id' =>1,
            'company_id' =>1,
        ]);
        GroupUser::factory()->create([
            'user_id' => 3,
            'group_id' =>2,
            'company_id' =>1,
        ]);
    }
}
