<?php

namespace Database\Seeders;

use App\Models\UserNewAttachment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserNewAttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserNewAttachment::factory()->create([
            'user_new_id' =>1,
            'company_id' =>1,
            'title' => '',
            'link' => 'https://novonordisk.sharepoint.com/sites/Poland/SitePages/Zwyci%C4%99zcy-Simply-The-Best-CDC-Poland.aspx?source=https%3A%2F%2Fnovonordisk.sharepoint.com%2Fsites%2FPoland',
            'file_type' => 4,
        ]);
    }
}
