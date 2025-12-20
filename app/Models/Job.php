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

    protected $fillable = [
        'title',
        'description',
        'location',
        'salary',
        'company_name',
    ];
}
