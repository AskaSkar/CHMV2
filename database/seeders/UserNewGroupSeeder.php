<?php

namespace Database\Seeders;

use App\Models\UserNewGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserNewGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserNewGroup::factory()->create([
            'user_new_id' =>1,
            'company_id' =>1,
            'group_id' => 1,
        ]);
        UserNewGroup::factory()->create([
            'user_new_id' =>1,
            'company_id' =>1,
            'group_id' => 2,
        ]);
        UserNewGroup::factory()->create([
            'user_new_id' =>2,
            'company_id' =>1,
            'group_id' => 1,
        ]);
        UserNewGroup::factory()->create([
            'user_new_id' =>2,
            'company_id' =>1,
            'group_id' => 2,
        ]);
        UserNewGroup::factory()->create([
            'user_new_id' =>3,
            'company_id' =>1,
            'group_id' => 2,
        ]);
    }
}
