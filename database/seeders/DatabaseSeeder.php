<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\JobApplication;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Core Seeders
        |--------------------------------------------------------------------------
        */

        $this->call([
            JobStatusSeeder::class,
            SkillSeeder::class,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Demo User
        |--------------------------------------------------------------------------
        */

        $user = User::factory()->create([
            'name' => 'Raza',
            'email' => 'raza@example.com',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Companies
        |--------------------------------------------------------------------------
        */

        $companies = Company::factory(10)->create();

        /*
        |--------------------------------------------------------------------------
        | Job Applications
        |--------------------------------------------------------------------------
        */

        JobApplication::factory(20)
            ->create([
                'user_id' => $user->id,
            ])
            ->each(function ($jobApplication) {

                // Attach random skills
                $skills = Skill::inRandomOrder()
                    ->take(rand(2, 4))
                    ->pluck('id');

                $jobApplication->skills()->attach($skills);
            });
    }
}