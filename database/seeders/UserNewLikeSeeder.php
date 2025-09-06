<?php

namespace Database\Seeders;

use App\Models\UserNewLike;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserNewLikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserNewLike::factory()->create([
            'user_new_id' =>1,
            'user_id' =>1,
            'company_id' =>1,
            'like_type' =>2,
        ]);
    }
}
