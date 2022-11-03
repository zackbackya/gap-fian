<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Agent;
use App\Models\CategoryArticle;
use App\Models\CategoryListing;
use App\Models\UserLogin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        UserLogin::create([
            'agent_id' => '1',
            'username' => 'backya',
            'password' => bcrypt('admin'),
            'access' => 'Admin'
        ]);

        Agent::create([
            'nik' => '3509091210950001',
            'name' => 'Zacky',
            'sex' => 'Pria',
            'email' => 'admin@admin.com',
            'birthdate' => '2022-08-03',
            'address' => 'Jember',
            'whatsapp' => '6282143281070',
            'instagram' => 'zackbackya',
            'facebook' => 'zackbackya',
            'photo_path' => '/uploaded_images/zacky.jpg',
            'status' => 'T'
        ]);

        CategoryListing::create([
             'category_name' => 'Oper Kredit'
        ]);

        CategoryArticle::create([
            'category_name' => 'property'
       ]);

        //Agent::factory(5)->create;


    }
}
