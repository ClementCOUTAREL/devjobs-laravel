<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $dates=['last_date'];

    protected $fillable = [
        'title',
        'company',
        'category_id',
        'salary_id',
        'last_date',
        'description',
        'user_id'
    ];

}