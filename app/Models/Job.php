<?php

namespace App\Models;

use App\Models\User;
use App\Models\Salary;
use App\Models\Category;
use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function salary()
    {
        return $this->belongsTo(Salary::class);
    }

    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }

    public function isCandidate()
    {
        return $this->candidates->contains(auth()->user()->id);
    }

    public function recruiter()
    {
       return $this->belongsTo(User::class, 'user_id'); 
    }

}