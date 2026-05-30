<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SkillFactory extends Factory
{
    public function definition(): array
    {
        $skills = [
            'Laravel',
            'PHP',
            'Redis',
            'MySQL',
            'React',
            'Vue',
            'Docker',
            'Git',
        ];

        return [
            'name' => fake()->unique()->randomElement($skills),
        ];
    }
}