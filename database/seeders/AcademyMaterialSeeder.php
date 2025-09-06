<?php

namespace Database\Seeders;

use App\Models\AcademyMaterial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademyMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AcademyMaterial::factory()->create([
            'company_id' => 1,
            'id_academy_category' => 4,
            'name' => 'Wege eBook z przepisami',
            'type' => 1,
            'lp' => 1,
            'link' => 'ebook-ugryz-diete-vege.pdf',
            'tags' =>'dieta,kuchnia,przepisy, zdrowe jedzenie',
            'qrcode'=>'',
            'therapeutic_area' =>'',
            'group_id' => null,
            'rating'=>6,
            'publication_date' => '2025-06-01',
        ]);
        AcademyMaterial::factory()->create([
            'company_id' => 1,
            'id_academy_category' => 5,
            'name' => 'Zrozumieć cukrzycę typu 1',
            'type' => 1,
            'lp' => 1,
            'link' => 'Zrozumienie-cukrzycy-typu-I-1.pdf',
            'tags' =>'dieta,kuchnia,przepisy, zdrowe jedzenie',
            'qrcode'=>'',
            'therapeutic_area' =>'',
            'group_id' => null,
            'rating'=>6,
            'publication_date' => '2025-06-01',
        ]);
        AcademyMaterial::factory()->create([
            'company_id' => 1,
            'id_academy_category' => 4,
            'name' => 'Hipoglikemia rozpoznanie postępowanie zapobiegawcze',
            'type' => 1,
            'lp' => 1,
            'link' => 'Zrozumienie-cukrzycy-typu-I-1.pdf',
            'tags' =>'dieta,kuchnia,przepisy, zdrowe jedzenie',
            'qrcode'=>'',
            'therapeutic_area' =>'',
            'group_id' => null,
            'rating'=>6,
            'publication_date' => '2025-06-01',
        ]);
        AcademyMaterial::factory()->create([
            'company_id' => 1,
            'id_academy_category' => 10,
            'name' => 'Fiasap ulotka korzyści',
            'type' => 1,
            'lp' => 1,
            'link' => 'PL21FSP00020_Fiasp_ulotka_korzysci_VEEVA.pdf',
            'tags' =>'Fiasap, ulotka,korzyście',
            'qrcode'=>'',
            'therapeutic_area' =>'',
            'group_id' => null,
            'rating'=>6,
            'publication_date' => '2025-06-01',
        ]);
    }
}
