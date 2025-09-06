<?php

namespace Database\Seeders;

use App\Models\AgendaContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgendaContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>1,
            'time_from' =>'10:00',
            'time_to' =>'10:45',
            'where' =>'Sala niebieska',
            'title' =>'Rozpoczęcie',
            'speakers' =>'Andrzej Borek',
            'presenters' => 'Novo Nordisk',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>1,
            'time_from' =>'11:00',
            'time_to' =>'11:45',
            'where' =>'Sala niebieska',
            'title' =>'Sesja 1',
            'speakers' =>'Andrzej Borek',
            'presenters' => 'Novo Nordisk',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'quiz' => true,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>1,
            'time_from' =>'12:00',
            'time_to' =>'12:45',
            'where' =>'Sala niebieska',
            'title' =>'Sesja 2',
            'speakers' =>'Andrzej Borek',
            'presenters' => 'Novo Nordisk',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>1,
            'time_from' =>'13:00',
            'time_to' =>'13:45',
            'where' =>'Sala niebieska',
            'title' =>'Warsztaty',
            'speakers' =>'Andrzej Borek',
            'presenters' => 'Novo Nordisk',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>1,
            'time_from' =>'17:00',
            'time_to' =>'17:45',
            'where' =>'Sala niebieska',
            'title' =>'sesja 3',
            'speakers' =>'Andrzej Borek',
            'presenters' => 'Novo Nordisk',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>1,
            'time_from' =>'18:00',
            'time_to' =>'18:45',
            'where' =>'Sala niebieska',
            'title' =>'sesja 4',
            'speakers' =>'Andrzej Borek',
            'presenters' => 'Novo Nordisk',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>2,
            'time_from' =>'10:00',
            'time_to' =>'10:45',
            'where' =>'Sala zielona',
            'title' =>'Sesja 1',
            'speakers' =>'Andrzej Borek',
            'presenters' => 'Novo Nordisk',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>2,
            'time_from' =>'11:00',
            'time_to' =>'11:45',
            'where' =>'Sala zielona',
            'title' =>'Sesja 2',
            'speakers' =>'Andrzej Borek',
            'presenters' => 'Novo Nordisk',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>2,
            'time_from' =>'12:00',
            'time_to' =>'12:45',
            'where' =>'Sala zielona',
            'title' =>'Sesja 3',
            'speakers' =>'Andrzej Borek',
            'presenters' => 'Novo Nordisk',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>2,
            'time_from' =>'13:00',
            'time_to' =>'13:45',
            'where' =>'Sala zielona',
            'title' =>'Warsztaty',
            'speakers' =>'Andrzej Borek',
            'presenters' => 'Novo Nordisk',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>2,
            'time_from' =>'17:00',
            'time_to' =>'17:45',
            'where' =>'Sala zielona',
            'title' =>'sesja 4',
            'speakers' =>'Andrzej Borek',
            'presenters' => 'Novo Nordisk',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>2,
            'time_from' =>'18:00',
            'time_to' =>'18:45',
            'where' =>'Sala niebieska',
            'title' =>'sesja 5',
            'speakers' =>'Andrzej Borek',
            'presenters' => 'Novo Nordisk',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>3,
            'time_from' =>'10:00',
            'time_to' =>'10:45',
            'where' =>'Sala niebieska',
            'title' =>'Podsumowanie',
            'speakers' =>'Andrzej Borek',
            'presenters' => 'Novo Nordisk',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>3,
            'time_from' =>'11:00',
            'time_to' =>'11:45',
            'where' =>'Sala niebieska',
            'title' =>'Pożegnanie',
            'speakers' =>'',
            'presenters' => 'Novo Nordisk',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'quiz' => false,
            'online' => false,
        ]);
    }
}
