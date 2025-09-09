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
            'time_from' =>'10:30',
            'time_to' =>'11:00',
            'where' =>'',
            'title' =>'Rejestracja',
            'speakers' =>'',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>1,
            'time_from' =>'11:00',
            'time_to' =>'11:30',
            'where' =>'',
            'title' =>'Rozpoczęcie kursu. Prezentacja firmy ChM',
            'speakers' =>'',
            'presenters' => '',
            'description' => '',
            'quiz' => true,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>1,
            'time_from' =>'11:30',
            'time_to' =>'12:00',
            'where' =>'',
            'title' =>'Obrazowanie stawu skokowego i stopy',
            'speakers' =>'dr Andrzej Komor',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>1,
            'time_from' =>'12:00',
            'time_to' =>'12:30',
            'where' =>'',
            'title' =>'Złamania typu tibial pilon – taktyka postępowania',
            'speakers' =>'dr hab. n. med. Henryk Liszka',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>1,
            'time_from' =>'12:30',
            'time_to' =>'13:00',
            'where' =>'',
            'title' =>'Artroza stawu skokowego – taktyka postępowania',
            'speakers' =>'dr Andrzej Komor',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>1,
            'time_from' =>'13:00',
            'time_to' =>'14:00',
            'where' =>'',
            'title' =>'Lunch',
            'speakers' =>'',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>1,
            'time_from' =>'14:00',
            'time_to' =>'14:30',
            'where' =>'',
            'title' =>'Panartrodeza tyłostopia z użyciem gwoździa piszczelowego wstecznego Charfix',
            'speakers' =>'dr Andrzej Komor',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>1,
            'time_from' =>'14:30',
            'time_to' =>'15:00',
            'where' =>'',
            'title' =>'Złamania kości piętowej – taktyka postępowania',
            'speakers' =>'dr Jarosław Blicharz',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>1,
            'time_from' =>'15:00',
            'time_to' =>'15:30',
            'where' =>'',
            'title' =>'Gwóźdź piętowy – wskazania i technika operacyjna',
            'speakers' =>'dr Jarosław Blicharz',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>1,
            'time_from' =>'15:30',
            'time_to' =>'16:00',
            'where' =>'',
            'title' =>'Przerwa kawowa',
            'speakers' =>'',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>1,
            'time_from' =>'16:00',
            'time_to' =>'16:30',
            'where' =>'',
            'title' =>'Uszkodzenia stawu Lisfranca – taktyka postępowania',
            'speakers' =>'dr Andrzej Komor',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>1,
            'time_from' =>'16:30',
            'time_to' =>'19:30',
            'where' =>'',
            'title' =>'Warsztaty na sztucznych kościach',
            'speakers' =>'',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>1,
            'time_from' =>'20:00',
            'time_to' =>null,
            'where' =>'',
            'title' =>'Kolacja',
            'speakers' =>'',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>2,
            'time_from' =>'9:00',
            'time_to' =>'9:30',
            'where' =>'',
            'title' =>'Paluch koślawy – diagnostyka i leczenie',
            'speakers' =>'dr Andrzej Komor',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>2,
            'time_from' =>'9:30',
            'time_to' =>'10:00',
            'where' =>'',
            'title' =>'Płytka do osteotomii dystalnej MT1 – moje doświadczenia',
            'speakers' =>'dr n. med. Jan Kiryluk',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>2,
            'time_from' =>'10:00',
            'time_to' =>'10:30',
            'where' =>'',
            'title' =>'Mini-inwazyjna przezskórna korekcja przodostopia',
            'speakers' =>'dr hab. n. med. Henryk Liszka',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>2,
            'time_from' =>'10:30',
            'time_to' =>'11:00',
            'where' =>'',
            'title' =>'',
            'speakers' =>'',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>2,
            'time_from' =>'11:00',
            'time_to' =>'11:30',
            'where' =>'',
            'title' =>'`Płaskostopie` czyli Foot Collapsing Deformity – taktyka postępowania',
            'speakers' =>'dr hab. n. med. Henryk Liszka',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>2,
            'time_from' =>'11:30',
            'time_to' =>'12:00',
            'where' =>'',
            'title' =>'Artroereza – moje doświadczenia',
            'speakers' =>'dr hab. n. med. Henryk Liszka',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>2,
            'time_from' =>'12:00',
            'time_to' =>'13:00',
            'where' =>'',
            'title' =>'Lunch',
            'speakers' =>'',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>2,
            'time_from' =>'13:00',
            'time_to' =>'15:30',
            'where' =>'',
            'title' =>'Warsztaty',
            'speakers' =>'',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
        AgendaContent::factory()->create([
            'company_id' =>1,
            'agenda_id' =>2,
            'time_from' =>'15:30',
            'time_to' =>null,
            'where' =>'',
            'title' =>'Uroczyste zakończenie kursu',
            'speakers' =>'',
            'presenters' => '',
            'description' => '',
            'quiz' => false,
            'online' => false,
        ]);
    }
}
