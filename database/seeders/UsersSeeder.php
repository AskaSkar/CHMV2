<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'firstname' => 'Joanna',
            'lastname'  => 'Skarżyńska-Kotyńska',
            'email'      => 'j.skarzynska@serwik.pl',
            'company_id' => 1,
            'role' => 2,
        ]);
        User::factory()->create([
            'firstname' => 'Jan',
            'lastname'  => 'Przedstawiciel CHM',
            'email'      => 'user1@test.pl',
            'company_id' => 1,
            'role' => 2,
            'admin' =>true,
        ]);
        User::factory()->create([
            'firstname' => 'Józef',
            'lastname'  => 'Uczestnik',
            'email'      => 'user2@test.pl',
            'company_id' => 1,
            'role' => 1,

        ]);
        User::factory()->create([
            'firstname' => 'Adam',
            'lastname'  => 'Abacki',
            'email'      => 'user3@test.pl',
            'company_id' => 1,
            'role' => 2,
            'news_editor' =>true,

        ]);
        User::factory()->create([
            'firstname' => 'Ewa',
            'lastname'  => 'Opiekun 1',
            'email'      => 'user4@test.pl',
            'company_id' => 1,
            'role' => 2,
            'phone' =>'+48689456123',
            'photo_booths_editor' => true,
        ]);
        User::factory()->create([
            'firstname' => 'Jacek',
            'lastname'  => 'Opiekun 2',
            'email'      => 'user5@test.pl',
            'company_id' => 1,
            'role' => 2,
            'phone' =>'+48689456124',
        ]);
    }
}
