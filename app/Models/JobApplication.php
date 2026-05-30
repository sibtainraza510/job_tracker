<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class JobApplication extends Model
{
    use HasFactory;
    use SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | Fillable Fields
    |--------------------------------------------------------------------------
    */

    protected $fillable = [
        'uuid',
        'user_id',
        'company_id',
        'company_name',
        'location',
        'job_status_id',
        'title',
        'salary',
        'application_url',
        'applied_at',
        'is_remote',
        'notes',
    ];

    /*
    |--------------------------------------------------------------------------
    | Attribute Casting
    |--------------------------------------------------------------------------
    */

    protected $casts = [
        'applied_at' => 'date',
        'is_remote' => 'boolean',
        'salary' => 'decimal:2',
    ];

    /*
    |--------------------------------------------------------------------------
    | Model Events
    |--------------------------------------------------------------------------
    */

    protected static function booted(): void
    {
        static::creating(function ($jobApplication) {

            $jobApplication->uuid = Str::uuid();
        });
    }

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(JobStatus::class, 'job_status_id');
    }

    public function notes(): HasMany
    {
        return $this->hasMany(JobNote::class);
    }

    public function interviews(): HasMany
    {
        return $this->hasMany(Interview::class);
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class);
    }


    public function scopeSearch($query, $search)
{
    if ($search) {

        $query->where(function ($q) use ($search) {

            $q->where('title', 'like', "%{$search}%")
              ->orWhere('company_name', 'like', "%{$search}%");

        });
    }
}
}