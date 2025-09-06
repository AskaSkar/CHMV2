<?php

namespace Database\Seeders;

use App\Models\MaterialsUsersRead;
use Illuminate\Database\Seeder;

class MaterialsUsersReadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaterialsUsersRead::factory()->create([
            'material_id' =>1,
            'user_id' =>1,
        ]);
    }
}
