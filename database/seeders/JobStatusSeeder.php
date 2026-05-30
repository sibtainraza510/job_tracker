<?php

namespace Database\Seeders;

use App\Models\JobStatus;
use Illuminate\Database\Seeder;

class JobStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            'Applied',
            'Interview',
            'Rejected',
            'Offer',
            'Ghosted',
        ];

        foreach ($statuses as $status) {

            JobStatus::create([
                'name' => $status,
            ]);
        }
    }
}