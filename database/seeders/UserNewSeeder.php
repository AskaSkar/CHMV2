<?php

namespace Database\Seeders;

use App\Models\UserNew;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserNewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserNew::factory()->create([
            'publish_date' => '2025-01-02',
            'publish_time' => '12:30:20',
            'title' => 'Gratulujemy Zwycięzcom CDC Poland Simply The Best Awards',
            'message' =>'Mamy przyjemność przedstawić Wam Zwycięzców nagród rocznych 2024 CDC Poland Simply The Best Awards, którzy zostali ogłoszeni podczas uroczystej gali na spotkaniu Mid Year Meeting CDC Poland w Janowie Podlaskim.   Nagrody CDC Poland Simply The Best są nie tylko symbolem uznania naszych liderów oraz Kolegów i Koleżanek, ale przede wszystkim świadectwem najwyższych standardów działania i doskonałych rezultatów osiąganych przez nasze Zespoły! GRATULUJEMY!',
            'picture' =>'1_Gratulujemy_Zwyciezcom_CDC_Poland.jpg',
            'user_id' => 1,
            'company_id' =>1,
        ]);
        UserNew::factory()->create([
            'publish_date' => '2025-01-03',
            'publish_time' => '12:30:20',
            'title' => 'Druga wiadomość',
            'message' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i',
            'picture' =>'th-4109958356.jpeg',
            'user_id' => 1,
            'company_id' =>1,
        ]);
        UserNew::factory()->create([
            'publish_date' => '2025-01-03',
            'publish_time' => '12:30:20',
            'title' => 'Trzecia wiadomość',
            'message' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i',
            'picture' =>'th-4109958356.jpeg',
            'user_id' => 1,
            'company_id' =>1,
        ]);
    }
}
