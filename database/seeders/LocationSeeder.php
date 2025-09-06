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
            'loc_name' => 'Novotel Warszawa Centrum',
            'loc_stars' => '****',
            'loc_city' => 'Warszawa',
            'loc_street' => 'Marszałkowska 94/98',
            'loc_zip_code' => '00-510',
            'lat' =>'52.229367',
            'lon' => '21.013171',
            'image' =>'Novotel_Warszawa.jpeg',
            'loc_phone' => '+48 22 548 42 72',
            'loc_email' => 'H3383@accor.com' ,
            'loc_web' => 'https://all.accor.com/booking/pl/novotel/hotels/warsaw-poland?compositions=1&stayplus=false&order_hotels_by=RECOMMENDATION&snu=false&hideWDR=false&productCode=null&accessibleRooms=false&hideHotelDetails=false&filters=eyJicmFuZHMiOlsiTk9WIl19&utm_term=mar&utm_campaign=ppc-nov-mar-msn-pl-pl-ee_ai-mix-sear&utm_medium=cpc&msclkid=4078f0543dce1ea8ccb798db5d8bb6c4&utm_source=bing&utm_content=pl-pl-PL-V4333',
            'is_restaurant' =>0,
            'is_hotel' =>1,
        ]);
        Location::factory()->create([
            'loc_name' => 'Beef and Pepper Steak house',
            'loc_stars' => '',
            'loc_city' => 'Warszawa',
            'loc_street' => 'Nowogrodzka 47A',
            'loc_zip_code' => '00-695',
            'lat' =>'52.227912518998124',
            'lon' => '21.008327935582265',
            'image' =>'OIP-2845708344.jpeg',
            'loc_phone' => '+48 785 025 025',
            'loc_email' => '' ,
            'loc_web' => 'https://beefandpepper.pl/',
            'is_restaurant' =>1,
            'is_hotel' =>0,
        ]);
    }
}
