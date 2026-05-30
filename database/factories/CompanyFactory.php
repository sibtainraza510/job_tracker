<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $companyName = fake()->company();

        return [

            'uuid' => Str::uuid(),

            'name' => $companyName,

            'slug' => Str::slug($companyName),

            'website' => fake()->url(),

            'location' => fake()->city(),

            'description' => fake()->paragraph(),
        ];
    }
}