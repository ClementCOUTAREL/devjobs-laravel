<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;
use Illuminate\Support\Carbon;

class EditJob extends Component
{

    public $job;
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

    public function mount()
    {
        $this->title = $this->job->title;
        $this->company = $this->job->company;
        $this->description = $this->job->description;
        $this->last_date = Carbon::parse($this->job->last_date)->format('Y-m-d') ;
        $this->salary = $this->job->salary_id;
        $this->category = $this->job->category_id;
    }

    public function submit()
    {
        $validated = $this->validate();

        $job = Job::find($this->job->id);

        $job->title = $validated['title'];
        $job->company = $validated['company'];
        $job->salary_id = $validated['salary'];
        $job->category_id = $validated['category'];
        $job->last_date = $validated['last_date'];
        $job->description = $validated['description'];
        
        $job->save();

        session()->flash('creation', "Updating job offer succeeded ");

        return redirect()->route('offer.index');

    }

    public function render()
    {
        return view('livewire.edit-job');
    }
}