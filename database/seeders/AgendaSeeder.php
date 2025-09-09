<?php

namespace Database\Seeders;

use App\Models\Agenda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Agenda::factory()->create([
            'company_id' =>1,
            'event_id' =>1,
            'date' =>'2025-09-12',
            ]);
        Agenda::factory()->create([
            'company_id' =>1,
            'event_id' =>1,
            'date' =>'2025-09-13',
        ]);
    }
}
