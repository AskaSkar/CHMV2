<?php

namespace Database\Seeders;

use App\Models\AcademyCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AcademyCategory::factory()->create([
            'parent_category_id' =>0,
            'lp' =>1,
            'name' => 'Pacjent',
            'type' =>1,
            'company_id' =>1,
        ]);
        AcademyCategory::factory()->create([
            'parent_category_id' =>0,
            'lp' =>2,
            'name' => 'Lekarz',
            'type' =>2,
            'company_id' =>1,
        ]);
        AcademyCategory::factory()->create([
            'parent_category_id' =>1,
            'lp' =>1,
            'name' => 'Diabetologia',
            'type' =>1,
            'company_id' =>1,
        ]);
        AcademyCategory::factory()->create([
            'parent_category_id' =>3,
            'lp' =>1,
            'name' => 'GLP-1',
            'type' =>1,
            'company_id' =>1,
        ]);
        AcademyCategory::factory()->create([
            'parent_category_id' =>3,
            'lp' =>2,
            'name' => 'Insuliny',
            'type' =>1,
            'company_id' =>1,
        ]);
        AcademyCategory::factory()->create([
            'parent_category_id' =>1,
            'lp' =>2,
            'name' => 'Otyłość',
            'type' =>1,
            'company_id' =>1,
        ]);
        AcademyCategory::factory()->create([
            'parent_category_id' =>1,
            'lp' =>3,
            'name' => 'Hemofilia',
            'type' =>1,
            'company_id' =>1,
        ]);
        AcademyCategory::factory()->create([
            'parent_category_id' =>2,
            'lp' =>1,
            'name' => 'Diabetologia',
            'type' =>2,
            'company_id' =>1,
        ]);
        AcademyCategory::factory()->create([
            'parent_category_id' =>8,
            'lp' =>1,
            'name' => 'GLP-1',
            'type' =>2,
            'company_id' =>1,
        ]);
        AcademyCategory::factory()->create([
            'parent_category_id' =>8,
            'lp' =>2,
            'name' => 'Insuliny',
            'type' =>2,
            'company_id' =>1,
        ]);
        AcademyCategory::factory()->create([
            'parent_category_id' =>2,
            'lp' =>2,
            'name' => 'Otyłość',
            'type' =>2,
            'company_id' =>1,
        ]);
        AcademyCategory::factory()->create([
            'parent_category_id' =>2,
            'lp' =>3,
            'name' => 'Hemofilia',
            'type' =>2,
            'company_id' =>1,
        ]);
    }
}
