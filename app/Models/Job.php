<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_title',
        'job_reference_no',
        'job_created_at',
        'job_end_at',
        'job_technologies',
        'job_salary',
        'job_listed_platform',
        'job_description'
    ];
}
