<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'Laravel, PHP, JavaScript, Vue.js',
            'company' => 'Laravel',
            'location' => 'San Francisco, CA',
            'email' => 'email1@gmail.com',
            'website' => 'https://laravel.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adip'
        ]);

        Listing::create([
            'title' => 'Full Stack Engineer',
            'tags' => 'Laravel, backend, JavaScript, Frontend',
            'company' => 'Vercel',
            'location' => 'Boston',
            'email' => 'email2@gmail.com',
            'website' => 'https://vercel.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adip'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
