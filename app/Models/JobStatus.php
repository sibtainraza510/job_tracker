<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class JobStatus extends Model
{
use HasFactory;
protected $fillable = [
        'name',
    ];

    public function jobApplications(): HasMany
    {
        return $this->hasMany(JobApplication::class);
    }
}