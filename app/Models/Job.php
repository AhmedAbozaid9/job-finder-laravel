<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    public static $types             = ['full-time', 'part-time', 'contract', 'internship', 'temporary'];
    public static $statuses          = ['open', 'closed', 'paused'];
    public static $experience_levels = ['entry', 'mid', 'senior', 'lead'];
    public static $categories        = ['IT', 'Finance', 'Healthcare', 'Education', 'Marketing'];

    protected $fillable = [
        'title',
        'description',
        'requirements',
        'location',
        'salary',
        'company_name',
        'type',
        'experience_level',
        'category',
        'user_id',
    ];

    protected $casts = [
        'requirements' => 'array',
        'salary'       => 'integer',
    ];

    public function poster(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function applicants(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class, 'applications')->withTimestamps();
    }

    public function savedBy(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class, 'saved_jobs')->withTimestamps();
    }
}
