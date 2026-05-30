<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class JobNote extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_application_id',
        'note',
    ];

    public function jobApplication(): BelongsTo
    {
        return $this->belongsTo(JobApplication::class);
    }
}