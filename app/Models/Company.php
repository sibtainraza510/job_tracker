<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Company extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Mass Assignment
    |--------------------------------------------------------------------------
    */
use HasFactory;
    protected $fillable = [
        'uuid',
        'name',
        'slug',
        'website',
        'location',
        'description',
    ];

    /*
    |--------------------------------------------------------------------------
    | Model Events
    |--------------------------------------------------------------------------
    */

    protected static function booted(): void
    {
        static::creating(function ($company) {

            // Generate UUID automatically
            $company->uuid = Str::uuid();

            // Generate slug automatically
            $company->slug = Str::slug($company->name);
        });
    }

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function jobApplications(): HasMany
    {
        return $this->hasMany(JobApplication::class);
    }
}