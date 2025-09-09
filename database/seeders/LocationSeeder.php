<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::factory()->create([
            'loc_name' => 'Centrum Konferencyjno-Wypoczynkowe Pałac i Folwark Łochów',
            'loc_stars' => '',
            'loc_city' => 'Łochów',
            'loc_street' => 'ul.Marii Konopnickiej 1 i 10',
            'loc_zip_code' => '07-130',
            'lat' =>'52.51536102894889',
            'lon' => '21.699441538540018',
            'image' =>'OIP-3223226002.jpeg',
            'loc_phone' => '+48 797 339 329',
            'loc_email' => 'recepcja@folwarklochow.pl' ,
            'loc_web' => 'https://www.palacifolwarklochow.pl/',
            'is_restaurant' =>0,
            'is_hotel' =>1,
        ]);
        Location::factory()->create([
            'loc_name' => 'Centrum Konferencyjno-Wypoczynkowe Pałac i Folwark Łochów',
            'loc_stars' => '',
            'loc_city' => 'Łochów',
            'loc_street' => 'ul.Marii Konopnickiej 1 i 10',
            'loc_zip_code' => '07-130',
            'lat' =>'52.51536102894889',
            'lon' => '21.699441538540018',
            'image' =>'OIP-2933743797.jpeg',
            'loc_phone' => '+48 797 339 329',
            'loc_email' => 'recepcja@folwarklochow.pl' ,
            'loc_web' => 'https://www.palacifolwarklochow.pl/',
            'is_restaurant' =>1,
            'is_hotel' =>0,
        ]);
    }
}
