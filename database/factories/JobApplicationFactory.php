<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\JobStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JobApplicationFactory extends Factory
{
    public function definition(): array
    {
        return [

            'uuid' => Str::uuid(),

            'user_id' => User::factory(),

            'company_id' => Company::factory(),

            'job_status_id' => JobStatus::inRandomOrder()->first()?->id ?? 1,

            'title' => fake()->jobTitle(),

            'salary' => fake()->numberBetween(30000, 150000),

            'application_url' => fake()->url(),

            'applied_at' => fake()->date(),

            'is_remote' => fake()->boolean(),

            'notes' => fake()->sentence(),
        ];
    }
}