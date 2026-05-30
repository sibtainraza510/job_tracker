<?php

namespace App\Services;

use App\Models\JobApplication;

class JobService
{
    public function create(array $data): JobApplication
    {
        return JobApplication::create($data);
    }

    public function update(JobApplication $job, array $data): JobApplication
    {
        $job->update($data);

        return $job;
    }

    public function delete(JobApplication $job): bool
    {
        return $job->delete();
    }
}