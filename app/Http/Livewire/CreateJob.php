<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class CreateJob extends Component
{

    public $categories;
    public $salaries;
    public $title;
    public $company;
    public $category;
    public $salary;
    public $last_date;
    public $description;

    protected $rules = [
        'title' => ['required', 'string'],
        'company' => ['required', 'string'],
        'salary' => ['required'],
        'category' => ['required'],
        'last_date' => ['required'],
        'description' => ['required'],
    ];

    public function render()
    {
        return view('livewire.create-job');
    }

    public function submit()
    {
        $validated = $this->validate();

        Job::create([
            'title' => $validated['title'],
            'company' => $validated['company'],
            'salary_id' => $validated['salary'],
            'category_id' => $validated['category'],
            'last_date' => $validated['last_date'],
            'description' => $validated['title'],
            'user_id' => auth()->user()->id,
        ]);

        session()->flash('creation', "Job creation was successful");

        return redirect()->route('offer.index');

    }

}