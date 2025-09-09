<?php

namespace Database\Seeders;

use App\Models\LocationsEvent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationsEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LocationsEvent::factory()->create([
        'event_id' =>1,
        'location_id' =>1,
        'loc_date_time' =>now(),
        'descr_header' =>'Pałac i Folwark',
        'descr' =>'Pałac i Folwark Łochów położony jest zaledwie godzinę jazdy od Warszawy drogą S8, w sercu Nadbużańskiego Parku Krajobrazowego, nad rzeką Liwiec, na terenie o powierzchni 40ha.',
        ]);
        LocationsEvent::factory()->create([
            'event_id' =>1,
            'location_id' =>2,
            'loc_date_time' =>now(),
            'descr_header' =>'Restauracja U Zamoyskiego – tradycja, smak i wyjątkowa atmosfera.',
            'descr' =>'Restauracja U Zamoyskiego serdecznie zaprasza do odkrywania smaków tradycyjnej kuchni polskiej oraz regionalnych specjałów inspirowanych bogactwem Mazowsza. Nasz lokal mieści się w urokliwym budynku, pieczołowicie odrestaurowanym z zachowaniem stylu pałacowego, co tworzy niepowtarzalny klimat i wyjątkową atmosferę.
To d        oskonałe miejsce zarówno na rodzinny obiad, spotkanie biznesowe, wieczór z przyjaciółmi, jak i organizację przyjęcia okolicznościowego. ',
        ]);
    }
}
