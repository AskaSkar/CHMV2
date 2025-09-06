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
        'descr_header' =>'Sala bursztynowa',
        'descr' =>'Hotel, który sprawia, że liczy się każda chwila

Zarezerwuj pokój w czterogwiazdkowym Novotel Warszawa Centrum ze wspaniałymi widokami na tętniącą życiem Warszawę. Hotel położony jest tylko 5 minut spacerem od Dworca Centralnego, a bliskość zabytków, sklepów i instytucji kultury zachęcają do zwiedzania. Wyśmienite jedzenie gwarantują hotelowy bar i restauracja. Śniadania są serwowane w dwóch restauracjach, na poziomie 0 oraz -1. W Novotelu dbamy również o udane spotkania biznesowe, a naszym gościom oferujemy doskonale wyposażone centrum konferencyjne.

Hotel Novotel Warszawa Centrum (hotel średniej klasy dla biznesu i rodziny) mieści się w samym centrum Warszawy niedaleko słynnego Pałacu Kultury i Nauki. Znajdujący się przy hotelu węzeł komunikacyjny (metro, autobusy i tramwaje) zapewnia dobrą komunikację z głównymi atrakcjami stolicy. Do hotelu można dojechać tramwajem z oddalonego o 500 m dworca, a z Lotniska Chopina kursuje bezpośredni autobus oraz Szybka Kolej Miejska. Podróż trwa ok. 25 min. Główne drogi dojazdowe to E30 i E77.

Zarezerwuj pokój w czterogwiazdkowym Novotel Warszawa Centrum ze wspaniałymi widokami na tętniącą życiem Warszawę. Wyśmienite jedzenie gwarantują hotelowy bar i restauracja. W Novotelu dbamy również o udane spotkania biznesowe i konferencje.',
        ]);
        LocationsEvent::factory()->create([
            'event_id' =>1,
            'location_id' =>2,
            'loc_date_time' =>now(),
            'descr_header' =>'Beef and Pepper Steak house - Restauracja Warszawa',
            'descr' =>'Restauracja Beef and Pepper specjalizuje się w stekach z wołowiny. Serwujemy jedne z najlepszych steków wołowych w Warszawie. Mięso grillujemy na grillu z lawą wulkaniczną, grill jest opalany ogniem, co sprawia, że steki mają niepowtarzalny smak. W naszym menu znajdziecie również ryby i owoce morza, sałatki oraz dania z drobiu. W karcie znajdują się również desery a czekoladowa kula z lodami i słonym karmelem jest obowiązkiem w Beef and Pepper. Nasz szeroko zaopatrzony w alkohole i wina bar zadowoli każdego Gościa. Profesjonalni barmani przygotują koktajl według Państwa preferencji smakowych. Gwarantujemy świetną kolację w miłej atmosferze oraz profesjonalną załogą! Pozdrawiamy i zapraszamy serdecznie 😊 ',
        ]);
    }
}
