<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPortal extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'job_title',
        'job_description',
        'salary_range',
        'image',
    ];
}
