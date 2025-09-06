<?php

namespace Database\Seeders;

use App\Models\UserNewRead;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserNewReadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserNewRead::factory()->create([
            'user_new_id' =>1,
            'user_id' =>1,
            'company_id' =>1,
        ]);
    }
}
