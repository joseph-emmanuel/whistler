<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable=[
        'status','application_date',
        'company_name',
         'contact_name',
         'phone',
         'email',
         'linkedin_name',
         'Address',
        'job_title',
        'job_description',
        'technologies',
         'reference_number',
         'salary',
         'ending_date',
        'source',
        'fit_value',
        'resume',
        'cover_letter',
        'transcript',
        'reference_document',
        'notes'
    ];
}
