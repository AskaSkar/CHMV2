<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Material::factory()->create([
        'link' =>'ulotka-informacyjna-dla-pacjentow.pdf',
        'name' =>'Grypa',
        'event_id' => null,
        'type' => 1,
        'id_group' => 0,
        'lp' => 0,
        'agenda_content_id' => 0,
        'user_id' =>null ,
        'therapeutic_area' => null,
        'material_category' => null,
        'rating' =>0,
        'is_doctor'=>0,
        'material_qrcode'=> null,
        'company_id' => 1,
        'publication_date' => '2025-06-02 12:20:00',
        ]);
        Material::factory()->create([
            'link' =>'piec-krokowk-do-bezpieczniejszej-zywnosci.pdf',
            'name' =>'Pięć kroków do bezpiecznej żywności',
            'event_id' => 1,
            'type' => 1,
            'id_group' => 0,
            'lp' => 0,
            'agenda_content_id' => 0,
            'user_id' =>null ,
            'therapeutic_area' => null,
            'material_category' => null,
            'rating' =>0,
            'is_doctor'=>0,
            'material_qrcode'=> null,
            'company_id' => 1,
            'publication_date' => '2025-06-04 13:20:00',
        ]);

        Material::factory()->create([
            'link' =>'NovoIndex_Probki_tekstow.docx',
            'name' =>'Przykładowy plik z Worda',
            'event_id' => 1,
            'type' => 2,
            'id_group' => 0,
            'lp' => 0,
            'agenda_content_id' => 0,
            'user_id' =>null ,
            'therapeutic_area' => null,
            'material_category' => null,
            'rating' =>0,
            'is_doctor'=>0,
            'material_qrcode'=> null,
            'company_id' => 1,
            'publication_date' => '2025-06-04 13:20:00',
        ]);
        Material::factory()->create([
            'link' =>'https://www.forum-dla-otylosci.pl/',
            'name' =>'Przykładowy plik z Worda',
            'event_id' => 1,
            'type' => 4,
            'id_group' => 0,
            'lp' => 0,
            'agenda_content_id' => 0,
            'user_id' =>null ,
            'therapeutic_area' => null,
            'material_category' => null,
            'rating' =>0,
            'is_doctor'=>0,
            'material_qrcode'=> null,
            'company_id' => 1,
            'publication_date' => '2025-06-04 13:20:00',
        ]);
        Material::factory()->create([
            'link' =>'https://novonordisk.sharepoint.com/sites/Poland/SitePages/Zwyci%C4%99zcy-Simply-The-Best-CDC-Poland.aspx?source=https%3A%2F%2Fnovonordisk.sharepoint.com%2Fsites%2FPoland',
            'name' =>'Przykładowy Sharepoint',
            'event_id' => 1,
            'type' => 3,
            'id_group' => 0,
            'lp' => 0,
            'agenda_content_id' => 0,
            'user_id' =>null ,
            'therapeutic_area' => null,
            'material_category' => null,
            'rating' =>0,
            'is_doctor'=>0,
            'material_qrcode'=> null,
            'company_id' => 1,
            'publication_date' => '2025-06-04 13:20:00',
        ]);

    }
}
