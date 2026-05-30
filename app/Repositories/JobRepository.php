<?php

namespace App\Repositories;

use App\Models\Job;
use App\Models\JobApplication;

class JobRepository
{
    public function getAll()
    {
        return JobApplication::latest()->paginate(10);
    }
}