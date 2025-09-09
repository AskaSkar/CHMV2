<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make('test123'),
        ]);
        User::factory()->create([
            'firstname' => 'Jan',
            'lastname'  => 'Przedstawiciel CHM',
            'email'      => 'user1@test.pl',
            'company_id' => 1,
            'role' => 2,
            'admin' =>true,
            'password' =>  Hash::make('test123'),
        ]);
        User::factory()->create([
            'firstname' => 'Józef',
            'lastname'  => 'Uczestnik',
            'email'      => 'user2@test.pl',
            'company_id' => 1,
            'role' => 1,
            'password' => Hash::make('test123'),
        ]);
        User::factory()->create([
            'firstname' => 'Adam',
            'lastname'  => 'Abacki',
            'email'      => 'user3@test.pl',
            'company_id' => 1,
            'role' => 2,
            'news_editor' =>true,
            'password' => Hash::make('test123'),
        ]);
        User::factory()->create([
            'firstname' => 'Ewa',
            'lastname'  => 'Opiekun 1',
            'email'      => 'user4@test.pl',
            'company_id' => 1,
            'role' => 2,
            'phone' =>'+48689456123',
            'photo_booths_editor' => true,
            'password' => Hash::make('test123'),
        ]);
        User::factory()->create([
            'firstname' => 'Jacek',
            'lastname'  => 'Opiekun 2',
            'email'      => 'user5@test.pl',
            'company_id' => 1,
            'role' => 2,
            'phone' =>'+48689456124',
            'password' =>  Hash::make('test123'),
        ]);
        User::factory()->create([
            'firstname' => 'Anna ',
            'lastname'  => 'Wnuczyńska',
            'email'      => 'wnuczynskaanna@gmail.com ',
            'company_id' => 1,
            'role' => 2,
            'password' => Hash::make('ChM2025'),
        ]);
User::factory()->create([ 'firstname' => 'Łukasz', 'lastname'  => 'Łajdanowicz','email'      => 'mr.lukasz12@interia.eu', 'company_id' => 1, 'role' => 2, 'password' => Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Jakub', 'lastname'  => 'Ambrożek', 'email'      => 'ambrozekkuba@gmail.com', 'company_id' => 1, 'role' => 2, 'password' => Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Marek', 'lastname'  => 'Broda', 'email'      => 'markb.mail@interia.pl', 'company_id' => 1, 'role' => 2,'password' => Hash::make('ChM2025'), ]);
User::factory()->create([ 'firstname' => 'Karol', 'lastname'  => 'Bziom', 'email'      => 'karol.bziom@gmail.com', 'company_id' => 1, 'role' => 2, 'password' => Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Ryszard', 'lastname'  => 'Rygus', 'email'      => 'ryszard.w.rygus@gmail.com', 'company_id' => 1, 'role' => 2, 'password' => Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Mikhail', 'lastname'  => 'Tsialtsou', 'email'      => 'mike120644@gmail.com', 'company_id' => 1, 'role' => 2, 'password' => Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Przemysław', 'lastname'  => 'Siekierko', 'email'      => 'przemyslawsiekierko96@gmail.com', 'company_id' => 1, 'role' => 2,'password' => Hash::make('ChM2025'), ]);
User::factory()->create([ 'firstname' => 'Vadzim', 'lastname'  => 'Yahorau', 'email'      => 'evaddim@gmail.com', 'company_id' => 1, 'role' => 2,'password' =>  Hash::make('ChM2025'), ]);
User::factory()->create([ 'firstname' => 'Mateusz', 'lastname'  => 'Szymański', 'email'      => 'mateusz1925@interia.pl', 'company_id' => 1, 'role' => 2, 'password' => Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Artur', 'lastname'  => 'Zagwojski','email'      => 'zagwoj@ortoprosport.pl', 'company_id' => 1, 'role' => 2,'password' => Hash::make('ChM2025'), ]);
User::factory()->create([ 'firstname' => 'Bartlomiej', 'lastname'  => 'Panasewicz', 'email'      => 'panasewiczbartek@gmail.com', 'company_id' => 1, 'role' => 2, 'password' => Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Paweł', 'lastname'  => 'Domański', 'email'      => 'pawel_domanski@op.pl', 'company_id' => 1, 'role' => 2,'password' => Hash::make('ChM2025'), ]);
User::factory()->create([ 'firstname' => 'Piotr', 'lastname'  => 'Kluczkowski', 'email'      => 'kluczkowski.p@gmail.com', 'company_id' => 1, 'role' => 2,'password' =>  Hash::make('ChM2025'), ]);
User::factory()->create([ 'firstname' => 'Jacek', 'lastname'  => 'Płaza', 'email'      => 'plazajacek@gmail.com', 'company_id' => 1, 'role' => 2,'password' =>  Hash::make('ChM2025'), ]);
User::factory()->create([ 'firstname' => 'Ewa', 'lastname'  => 'Masłowska', 'email'      => 'lekewanosarzewska@gmail.com', 'company_id' => 1, 'role' => 2, 'password' =>  Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Kamil', 'lastname'  => 'Fatyga','email'      => 'fatyga@onet.eu', 'company_id' => 1, 'role' => 2, 'password' => Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Valerii', 'lastname'  => 'Zaiats','email'      => 'valeraz1it@gmail.com', 'company_id' => 1, 'role' => 2, 'password' =>  Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Jagoda', 'lastname'  => 'Głodkowska','email'      => 'j.glodkowska@o2.pl', 'company_id' => 1, 'role' => 2,'password' =>  Hash::make('ChM2025'), ]);
User::factory()->create([ 'firstname' => 'Michał', 'lastname'  => 'Madras','email'      => 'michanio71@tlen.pl', 'company_id' => 1, 'role' => 2,'password' =>  Hash::make('ChM2025'), ]);
User::factory()->create([ 'firstname' => 'Roman', 'lastname'  => 'Pelc','email'      => 'romanpelc71@gmail.com', 'company_id' => 1, 'role' => 2, 'password' =>  Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Andrzej', 'lastname'  => 'Muniak','email'      => 'andrzejm14@vp.pl', 'company_id' => 1, 'role' => 2,'password' =>  Hash::make('ChM2025'), ]);
User::factory()->create([ 'firstname' => 'Krzysztof', 'lastname'  => 'Pakosiński','email'      => 'krzysztof.pakosinski@gmail.com', 'company_id' => 1, 'role' => 2, 'password' =>  Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Mateusz', 'lastname'  => 'Myślicki','email'      => 'mmyslicki1990@gmail.com', 'company_id' => 1, 'role' => 2,'password' =>  Hash::make('ChM2025'), ]);
User::factory()->create([ 'firstname' => 'Łukasz', 'lastname'  => 'Moczydlowski','email'      => 'lukasz.moczydlowski@gmail.com', 'company_id' => 1, 'role' => 2, 'password' =>  Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Magdalena', 'lastname'  => 'Makarewicz','email'      => 'm.makarewicz.97@gmail.com', 'company_id' => 1, 'role' => 2, 'password' =>  Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Adam', 'lastname'  => 'Górkiewicz','email'      => 'adgorkiewicz@gmail.com', 'company_id' => 1, 'role' => 2, 'password' =>  Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Joanna', 'lastname'  => 'Owłasiuk','email'      => 'owlasiukjoanna@gmail.com ', 'company_id' => 1, 'role' => 2, 'password' =>  Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Monika', 'lastname'  => 'Pabisz','email'      => 'monika.pabisz@gmail.com', 'company_id' => 1, 'role' => 2,'password' =>  Hash::make('ChM2025'), ]);
User::factory()->create([ 'firstname' => 'Artur', 'lastname'  => 'Majer','email'      => 'artmaj9540@gmail.com', 'company_id' => 1, 'role' => 2, 'password' =>  Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Mateusz', 'lastname'  => 'Pawluczuk','email'      => 'mateusz.pawluczuk16@gmail.com ', 'company_id' => 1, 'role' => 2, 'password' =>  Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Dariusz', 'lastname'  => 'Gałązka','email'      => 'dargal@gazeta.pl', 'company_id' => 1, 'role' => 2, 'password' =>  Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Paweł', 'lastname'  => 'Frankowski','email'      => 'pfrankowski91@gmail.com ', 'company_id' => 1, 'role' => 2, 'password' =>  Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Michał', 'lastname'  => 'Smoczyk','email'      => 'mhsmoczyk@wp.pl', 'company_id' => 1, 'role' => 2,'password' =>  Hash::make('ChM2025'), ]);
User::factory()->create([ 'firstname' => 'Mateusz', 'lastname'  => 'Czykwin','email'      => 'czykwin.mateusz@gmail.com ', 'company_id' => 1, 'role' => 2,'password' =>  Hash::make('ChM2025'), ]);
User::factory()->create([ 'firstname' => 'Max', 'lastname'  => 'Słabosz','email'      => 'max.slabosz@gmail.com', 'company_id' => 1, 'role' => 2,'password' => Hash::make('ChM2025'), ]);
User::factory()->create([ 'firstname' => 'Paweł', 'lastname'  => 'Pietrow','email'      => 'pablo24396@gmail.com', 'company_id' => 1, 'role' => 2, 'password' => Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Krzysztof', 'lastname'  => 'Domański','email'      => 'domanski.k1@gmail.com ', 'company_id' => 1, 'role' => 2, 'password' =>  Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Ewa', 'lastname'  => 'Osińska','email'      => 'choinska-ewa@wp.pl ', 'company_id' => 1, 'role' => 2, 'password' => Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Maciej', 'lastname'  => 'Wiśniewski','email'      => 'maciejwisniewski@live.com ', 'company_id' => 1, 'role' => 2, 'password' =>  Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Filip', 'lastname'  => 'Mikołajczak','email'      => 'ortopedia.chojnice@gmail.com ', 'company_id' => 1, 'role' => 2, 'password' =>  Hash::make('ChM2025'),]);
User::factory()->create([ 'firstname' => 'Robert', 'lastname'  => 'Kalita','email'      => 'rob.kalita@wp.pl ', 'company_id' => 1, 'role' => 2,'password' =>  Hash::make('ChM2025'), ]);
    }
}
