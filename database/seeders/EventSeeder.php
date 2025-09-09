<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::factory()->create([
        'name'   => 'STOPA I STAW SKOKOWY',
        'date_from' => '2025-09-12',
        'date_to' => '2025-09-13',
        'bg_image' =>'',
        'logo_image' => 'OIP-3223226002.jpeg',
        'icon_color' => '#009FDA',
        'txt_light_color' => '#FFFFFF',
        'txt_dark_color' => '#001423',
        'bg_light_color' => '#009FDA',
        'bg_dark_color' => '#001965',
        'user_info1_txt' => '',
        'user_info2_txt' => '',
        'company_id' => 1,
        'published' => 0,
        'data_publication' => '2025-09-08',
        'description' => 'Kurs praktyczny na sztucznych kościach',
        'eventscol' =>'',
        'date_registration_representative' => null,
        'status' => 0,
        'participants_total' =>0,
        'inside' => 0,
        'info' => null,
        'coordinator_id' => 0,
        'events_type_id' => 0,
        'events_area_id' => 0,
        'location_id' =>1,
        'data_publication_to' => null,
        'date_registration_representative_to' => null,
        'with_hotel' => 0,
        'with_scientific_society' =>0,
        'additional_registration_end_date' => null,
        'btn_visible' => 0,
        'is_online' => 0,
        'number_registrations_central' => 0,
        'photobooth_access' => 0,
        'photobooth_liked_strat_date' => null,
        'photobooth_liked_strat_time' => null,
        'photobooth_liked_end_date' => null,
        'photobooth_liked_end_time' => null,
        'photobooth_liked_max_count' => 0,
        ]);

    }
}
