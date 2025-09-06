<?php

namespace Database\Seeders;

use App\Models\UserNewBookmark;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserNewBookmarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserNewBookmark::factory()->create([
            'user_new_id' =>1,
            'user_id' =>1,
            'company_id' =>1,
        ]);
    }
}
