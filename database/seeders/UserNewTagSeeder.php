<?php

namespace Database\Seeders;

use App\Models\UserNewTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserNewTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserNewTag::factory()->create([
            'user_new_id' =>1,
            'company_id' =>1,
            'tag' => 'Cukrzyca',
        ]);
        UserNewTag::factory()->create([
            'user_new_id' =>1,
            'company_id' =>1,
            'tag' => 'Dieta',
        ]);
        UserNewTag::factory()->create([
            'user_new_id' =>1,
            'company_id' =>1,
            'tag' => 'Waga',
        ]);
        UserNewTag::factory()->create([
            'user_new_id' =>2,
            'company_id' =>1,
            'tag' => 'Dieta',
        ]);
        UserNewTag::factory()->create([
            'user_new_id' =>2,
            'company_id' =>1,
            'tag' => 'Waga',
        ]);
        UserNewTag::factory()->create([
            'user_new_id' =>3,
            'company_id' =>1,
            'tag' => 'Kardiologia',
        ]);
        UserNewTag::factory()->create([
            'user_new_id' =>3,
            'company_id' =>1,
            'tag' => 'serce',
        ]);
        UserNewTag::factory()->create([
            'user_new_id' =>3,
            'company_id' =>1,
            'tag' => 'nadciśnienie',
        ]);
    }
}
