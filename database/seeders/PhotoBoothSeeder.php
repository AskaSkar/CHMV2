<?php

namespace Database\Seeders;

use App\Models\PhotoBooth;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoBoothSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PhotoBooth::factory()->create([
            'image' => 'th-4109958356.jpeg',
            'user_id' => 1,
            'company_id' =>1,
            'event_id' =>1,
        ]);
    }
}
