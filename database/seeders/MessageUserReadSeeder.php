<?php

namespace Database\Seeders;

use App\Models\MessageUserRead;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageUserReadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MessageUserRead::factory()->create([
            'message_id' =>1,
            'user_id' =>1,
        ]);
    }
}
