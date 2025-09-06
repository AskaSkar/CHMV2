<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Message::factory()->create([
        'type' => 1,
        'publish_date' => '2025-06-22',
        'publish_time' => '16:00:00',
        'title' => 'Test 1',
        'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i',
        'picture' =>'th-4109958356.jpeg',
        'user_id' => 1,
        'company_id' => 1,
        'highlight_entry' => 0,
        'block_comments' => 0,
        'block_reactions' => 0,
        'who_can_see' => 0,
        'event_id' =>1,
        ]);
        Message::factory()->create([
            'type' => 1,
            'publish_date' => '2025-06-23',
            'publish_time' => '23:00:00',
            'title' => 'TTest 2',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i',
            'picture' =>'ttabletki_79075-23734-105427032.jpg',
            'user_id' => 1,
            'company_id' => 1,
            'highlight_entry' => 0,
            'block_comments' => 0,
            'block_reactions' => 0,
            'who_can_see' => 0,
            'material_id' => 2,
        ]);
    }
}
