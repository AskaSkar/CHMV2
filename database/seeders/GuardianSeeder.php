<?php

namespace Database\Seeders;

use App\Models\Guardian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuardianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guardian::factory()->create([
            'user_id'=>5,
            'company_id'=>1,
            'event_id'=>1,
        ]);
        Guardian::factory()->create([
            'user_id'=>6,
            'company_id'=>1,
            'event_id'=>1,
        ]);
    }
}
