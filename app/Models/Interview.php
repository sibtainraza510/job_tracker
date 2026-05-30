<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Interview extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_application_id',
        'round_name',
        'interview_at',
        'mode',
        'meeting_link',
        'feedback',
    ];

    protected $casts = [
        'interview_at' => 'datetime',
    ];

    public function jobApplication(): BelongsTo
    {
        return $this->belongsTo(JobApplication::class);
    }
}