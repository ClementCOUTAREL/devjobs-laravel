<?php

namespace App\Http\Livewire;

use App\Models\Job;
use App\Models\Salary;
use Livewire\Component;
use App\Models\Category;

class SearchJobs extends Component
{

    public $categories;
    public $salaries;

    public $title;
    public $category_id;
    public $salary_id;

    public function mount()
    {
        $this->salaries = Salary::all();
        $this->categories = Category::all();
    }

    public function submit()
    {
       $this->emit('search', $this->title, $this->category_id, $this->salary_id);
    }

    public function render()
    {
        return view('livewire.search-jobs',
    [
        'salaries' => $this->salaries,
        'categories' => $this->categories,
    ]);
    }
}