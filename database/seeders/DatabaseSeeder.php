<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\UserNewGroup;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call(CompanySeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(GroupUserSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(LocationsEventSeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call((MaterialsUsersReadSeeder::class));
        $this->call(MessageSeeder::class);
        $this->call(MessageUserReadSeeder::class);
        $this->call(AcademyCategorySeeder::class);
        $this->call(AcademyMaterialSeeder::class);
        $this->call(UserNewSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(UserNewReadSeeder::class);
        $this->call(UserNewLikeSeeder::class);
        $this->call(UserNewBookmarkSeeder::class);
        $this->call(UserNewAttachmentSeeder::class);
        $this->call(UserNewGroupSeeder::class);
        $this->call(UserNewTagSeeder::class);
        $this->call(AgendaSeeder::class);
        $this->call(AgendaContentSeeder::class);
        $this->call(PhotoBoothSeeder::class);
        $this->call(GuardianSeeder::class);
        $this->call(AcceptanceSeeder::class);
    }
}
